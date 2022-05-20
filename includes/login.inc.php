<?php
require_once './includes/connect_DB.inc.php';

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
                    $_req = $_bdd->prepare("SELECT * FROM client WHERE emailClient = :email");
                    $_req -> BindValue('email', $_email);
                    $_req->execute();
                    while ($_donnees = $_req->fetch()) {
                        if (password_verify($_mdp, $_donnees['mdpClient'])) {
                            $_SESSION['id'] = $_donnees['idClient'];
                            $_SESSION['email'] = $_donnees['emailClient'];
                            $_SESSION['nom'] = $_donnees['nomClient'];
                            $_SESSION['prenom'] = $_donnees['prenomClient'];
                            $_SESSION['age'] = $_donnees['ageClient'];
                            $_SESSION['ville'] = $_donnees['villeClient'];
                            $_SESSION['mdp'] = $_donnees['mdpClient'];
                            $_SESSION['connected'] = true;
                            print_r($_SESSION);
                            header('Location: ?page=home');

                        }
                        else 
                        {
                            print "<p class=\"warning\"> Email ou mot de passe incorrect </p>";
                        }
                    }
                }
            }
        }
?>