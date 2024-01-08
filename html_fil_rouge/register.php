<?php
//importer le fichier de connexion BDD
include './connectBdd.php';
//tester si le bouton à été cliqué
if(isset($_POST["submit"])){
    //tester si les champs sont bien remplis
    if(!empty($_POST["nom"]) AND !empty($_POST["prenom"]) AND !empty($_POST["email"])
    AND !empty($_POST["password_utilisateur"]) AND !empty($_POST["password_verification"])){
        //tester si les 2 passwords sont identiques
        if($_POST["password_utilisateur"]===$_POST["password_verification"]){
            //nettoyer le mail 
            $email = cleanInput($_POST["email"]);
            //tester si le compte n'existe pas
            if(empty(getUserByMail($bdd,$email))){
                //nettoyer les entrèes utilisateur
                $nom = cleanInput($_POST["nom"]);
                $prenom = cleanInput($_POST["prenom"]);
                $password = cleanInput($_POST["password_utilisateur"]);
                //hasher le mot de passe
                $hash = password_hash($password,PASSWORD_DEFAULT);
                //ajouter le compte en BDD
                addUser($bdd,$nom, $prenom, $email, $hash);
                //afficher un message le compte à été ajouté
                echo "Le compte a été ajoué";
            }
    }
}
}
function getUserByMail($bdd,$email){
    try {
        $requete = $bdd->prepare('SELECT id FROM utilisateur WHERE email = ?');
        $requete->bindParam(1,$email,PDO::PARAM_STR);
        $requete->execute();
        $data = $requete->fetch(PDO::FETCH_ASSOC);
        return $data;
    } 
    catch (Exception $e) {
        die('Error : '.$e->getMessage());
    }
}
function addUser($bdd,$nom,$prenom,$email,$password){
    try {
        $requete = $bdd->prepare('INSERT INTO utilisateur(nom_utilisateur,prenom_utilisateur,email_utilisateur,password_utilisateur) VALUE(?,?,?,?)');
        $requete->bindParam(1,$nom,PDO::PARAM_STR);
        $requete->bindParam(2,$prenom,PDO::PARAM_STR);
        $requete->bindParam(3,$email,PDO::PARAM_STR);
        $requete->bindParam(4,$password,PDO::PARAM_STR);
        $requete->execute();
    } 
    catch (Exception $e) {
        die('Error : '.$e->getMessage());
    }
}
function cleanInput(string $value):string
{
    return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
}