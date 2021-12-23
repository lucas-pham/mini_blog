<?php
session_start();
include("connexion.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./pure-release-1.0.0/pure-min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main action="accueil.php" method="GET">
    <form action="commentaires.php" method="GET">
        <h1>Accueil </h1>
        <h2>Les derniers billets :</h2>
        <?php
        include ('connexion.php');
        $requete = "SELECT * FROM miniblogbilllets";

        $stmt = $db -> query($requete);
        $billlets = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        
        
        foreach ($billlets as $billlets){
            echo "
            <div class='box ticket'>
            <h3>".$billlets["titre"]." </h3>
            <p>
            Date : ".$billlets["date"]." <br>
            Contenu : ".$billlets["contenu"]." <br>
            </p>
            <input type='submit' value='Voir les commentaires'><br></div>";

        }
        echo'
        <br>
        <a href="archives.php">Archives</a>';



        $hash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        echo"mdp hashé :".$hash;

        if (isset($_SESSION["id_user"])) {
            echo'
        <br>
        <a href="deconnexion.php">Déconnexion</a>';
        }


        ?>
        </main>
</body>

</html>
