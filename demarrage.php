<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./pure-release-1.0.0/pure-min.css">
</head>

<body>
    <main action="accueil.php" method="GET">
    <h1>Bienvenue sur le mini-blog ! </h1>
    <div>
    <form action="admin.php" method="GET">
        <?php
            echo "
            <input type='submit' value='Administrateur'>"
            ;
        ?>
    </div>
    <div>
    <form action="accueil.php" method="GET">
        <?php
            echo "
            <input type='submit' value='Visiteur'>"
            ;
        ?>
    </div>
    </main>

</body>

</html>