<!-- if (isset($_SESSION["id_user"]==1)) { -->

<?php
        include ('connexion.php');

        $requete = "SELECT * FROM `miniblogbilllets` WHERE id_article=:id_article";
        $stmt = $db->prepare($requete);
        $stmt->bindValue(':id_article', $_POST['id_article'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->rowcount();
        
        if ($stmt->rowcount() != 0) {

// On récupère les infos de l'article en question
$article = $stmt->fetch(PDO::FETCH_ASSOC);
// On vérifie le mdp
// if ($utilisateur["mdp"] == $_POST['mdp']) {
if (password_verify($_POST['mdp'], $article["mdp"])) {
    session_start();
    $_SESSION["id_user"]=$article["id_user"];
    $_SESSION["login"]=$article["login"];
    $_SESSION["nom"]=$article["nom"];

    header('location: accueil.php');

} else {
    header('location: admin.php?erreur=mdp');
}

}else{

header('location: admin.php?erreur=login');
}

?>