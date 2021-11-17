<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php
        $link = new PDO('mysql:host=sqletud.u-pem.fr;dbname=lucas.pham_db', 'lucas.pham', '77Boreyangkor', array
        (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
    ?>
</body>
</html>