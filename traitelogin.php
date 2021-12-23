<?php
        include ('connexion.php');

        $requete = "SELECT * FROM `miniblogutilisateurs` WHERE login=:login";
        $stmt = $db->prepare($requete);
        $stmt->bindValue(':login', $_POST['login'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->rowcount();
        
        if ($stmt->rowcount() != 0) {

// On récupère les infos de l'utilisateur en question
$utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
// On vérifie le mdp
// if ($utilisateur["mdp"] == $_POST['mdp']) {
if (password_verify($_POST['mdp'], $utilisateur["mdp"])) {
    session_start();
    $_SESSION["id_user"]=$utilisateur["id_user"];
    $_SESSION["login"]=$utilisateur["login"];
    $_SESSION["nom"]=$utilisateur["nom"];

    header('location: accueil.php');

} else {
    header('location: login.php?erreur=mdp');
}

}else{

header('location: login.php?erreur=login');
}

?>
