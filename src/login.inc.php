<?php
require_once './src/connect_DB.inc.php';

        if(isset($_POST['email']) && isset($_POST['mdp']))
        {
            $_email = $_POST['email'];
            $_mdp = $_POST['mdp'];
            
            if(strlen($_email) > 10 && strlen($_mdp) > 5)
            {
                if(is_numeric($_email))
                {
                    print "<p class=\"warning\"> veuillez saisir des lettres</p>";
                }
                elseif(!filter_var($_email, FILTER_VALIDATE_EMAIL)) 
                {
                    print "<p class=\"warning\"> veuillez saisir un email valide</p>";
                }
                else 
                {
                    $_req = $_bdd->prepare("SELECT nomClient, prenomClient, emailClient FROM client WHERE emailClient = :email AND mdpClient = :mdp");
                    $_req -> execute(array(
                        'email' => $_email
                        ,'mdp' => $_mdp
                    ));
                    if ($_req) 
                    {
                        print "<p class=\"success\"> Connexion réussie </p>";

                        $_SESSION['email'] = $_email;

                        sleep(3);
                        header('Location: ./index.php');
                    }
                    else
                    {
                        die("<p class=\"warning\"> Cet email est déjà utilisé </p>");
                    }
                } 
        }
    }
?>