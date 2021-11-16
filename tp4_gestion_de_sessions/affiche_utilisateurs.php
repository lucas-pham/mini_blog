<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./pure-release-1.0.0/pure-min.css">
</head>

<body>
    <main action="affiche_utilisateurs.php" method="GET">
        <h1>Afficher tous les utilisateurs </h1>
        <?php
        include ('connexion.php');
        $requete = "SELECT * FROM utilisateurs";

        $stmt = $db -> query($requete);
        $utilisateurs = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($utilisateurs as $utilisateurs){
            echo "<p>
            ".$utilisateurs["nom"]."
            ".$utilisateurs["prenom"]." <br>
            ".$utilisateurs["ville"]." <br>
            ".$utilisateurs["login"]." <br>
            ".$utilisateurs["mot_de_passe"]." <br>
            ".$utilisateurs["ville"]." <br><br>
            
            </p";
        }
        ?>

    </main>

</body>

</html>