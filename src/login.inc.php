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
                    print "<p class=\"warning\"> Veuillez saisir des lettres</p>";
                }
                elseif(!filter_var($_email, FILTER_VALIDATE_EMAIL)) 
                {
                    print "<p class=\"warning\"> Veuillez saisir un email valide</p>";
                }
                else 
                {
                    $_req = $_bdd->prepare("SELECT nomClient, prenomClient, emailClient FROM client WHERE emailClient = :email AND mdpClient = :mdp");
                    $_req -> execute(array(
                        'email' => $_email
                        ,'mdp' => $_mdp
                    ));
                    $_verify = $_req->fetch(PDO::FETCH_ASSOC);

                    if ($_req || password_verify($_mdp, $_verify['mdpClient']))
                    {
                        $_donnees = $_req->fetchAll();

                        foreach ($_donnees as $_user) 
                        {

                            $_SESSION['email'] = $_user['emailClient'];
                            $_SESSION['nom'] = $_user['nomClient'];
                            $_SESSION['prenom'] = $_user['prenomClient'];
                            $_SESSION['age'] = $_user['ageClient'];
                            $_SESSION['ville'] = $_user['villeClient'];
                            $_SESSION['mdp'] = $_user['mdpClient'];
                            $_SESSION['id'] = $_user['idClient'];

                            print "<p class=\"success\"> Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom']."</p>";
                            print "<p class=\"success\"> Vous êtes connecté</p>";
                            sleep(3);
                            header('Location: ./index.php');
                        }
                    }
        }
    }
?>