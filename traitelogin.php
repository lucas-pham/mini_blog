<?php
        include ('connexion.php');

        $requete = "SELECT * FROM `utilisateurs` WHERE login = '".$_GET["user_login"]."'";
        $stmt=$db -> query($requete);
        $utilisateurs = $stmt -> fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowcount ()==1){
        if ($_GET["mot_de_passe"]==$utilisateurs["mot_de_passe"]){       
        echo 
            "<h1> Informations de l'utilisateur </h1>
            <p> 
            Nom : ".$utilisateurs["nom"]." <br>
            Prénom : ".$utilisateurs["prenom"]." <br>
            Ville : ".$utilisateurs["ville"]." <br>
            Login : ".$utilisateurs["login"]." <br>
            Mot de passe : ".$utilisateurs["mot_de_passe"]." <br>
            Ville : ".$utilisateurs["ville"]." <br><br>
            </p";
        } else {
        $_SESSION = array ();
        header ('Location:saisie_login.php?err=mdp');}
        // exo 3 partie 3 à faire
        }


?>
