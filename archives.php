<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./pure-release-1.0.0/pure-min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main action="accueil.php" method="POST">
    <h1>Archives </h1>
    <div class="center box">
    <h2>Tous les commentaires</h2>
        <?php
        include ('connexion.php');
        $requete = "SELECT * FROM miniblogcommentaires";

        $stmt = $db -> query($requete);
        $commentaires = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($commentaires as $commentaires){
            echo "
            <p>
            ".$commentaires["contenu"]." <br>
            ".$commentaires["date"]."
            </p>"
            ;
        }

        ?>
</div>
    </main>

</body>

</html>