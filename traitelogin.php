<?php
        include ('connexion.php');

        $requete = "SELECT * FROM `utilisateurs` WHERE login = '".$_GET["id"]."'";
        $stmt=$db -> query($requete);
        $utilisateurs = $stmt -> fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowcount ()==1){
        if ($_GET["mdp"]==$utilisateurs["mdp"]){       
        echo 
            "<h1> Informations de l'utilisateur </h1>
            <p> 
            Nom : ".$utilisateurs["nom"]." <br>
            Login : ".$utilisateurs["login"]." <br>
            Mot de passe : ".$utilisateurs["mot_de_passe"]." <br>
            </p";
        } else {
        $_SESSION = array ();
        header ('Location:saisie_login.php?err=mdp');}
        // exo 3 partie 3 à faire
        }


?>
