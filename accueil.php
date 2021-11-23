<?php
        include ('connexion.php');

        $requete = "SELECT * FROM `billlets`";
        $stmt=$db -> query($requete);
        $billlets = $stmt -> fetchAll(PDO::FETCH_ASSOC);



        // if ($stmt->rowcount ()==1){
        // if ($_GET["mdp"]==$utilisateurs["mdp"]){       
        echo 
            "<h1> 3 derniers billets </h1>
            <p> 
            Titre : ".$billlets["titre"]." <br>
            Contenu : ".$billlets["contenu"]." <br>
            </p";
        // } else {
        // $_SESSION = array ();
        // header ('Location:saisie_login.php?err=mdp');}
        // exo 3 partie 3 à faire
        // }


?>