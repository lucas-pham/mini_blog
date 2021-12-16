<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./pure-release-1.0.0/pure-min.css">
</head>

<body>
    <main action="accueil.php" method="GET">
    <h1>Commentaires </h1>
        <?php
        include ('connexion.php');
        $requete = "SELECT * FROM billlets";

        $stmt = $db -> query($requete);
        $billlets = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($billlets as $billlets){
            echo "
            <h2>".$billlets["titre"]." </h2>
            <p>
            Date : ".$billlets["date"]." <br>
            Contenu : ".$billlets["contenu"]." <br>
            </p>"
            ;
        }

        $requete = "SELECT * FROM commentaires";

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

    </main>

</body>

</html>