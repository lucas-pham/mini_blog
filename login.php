<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./pure-release-1.0.0/pure-min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form action="traitelogin.php" method="POST">
        <h1>Page utilisateur</h1>
        <div class="center box">
        <h2>Connexion</h2>
        <div>
        <label for="login">Login : </label>
        <input type="text" id="login" name="login">
        </div>
        <br>
        <div>
        <label for="mdp">Mot de passe : </label>
        <input type="password" id="mdp" name="mdp">
        </div>
        <br>
        </option>
        <input type="submit" value="Envoyer">

    </form>
    <?php
    if (isset($_GET["erreur"]) && $_GET["erreur"] == "login") {
        echo "ATTENTION MAUVAIS LOGIN";
    }
    if (isset($_GET["erreur"]) && $_GET["erreur"] == "mdp") {
        echo "ATTENTION MAUVAIS MOT DE PASSE";
    }
    ?>
    </div>
</body>

</html>