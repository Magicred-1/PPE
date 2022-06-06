<?php
            require_once './includes/connect_DB.inc.php';

                if(isset($_POST["nom"]) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['ville']) && isset($_POST['email']) && isset($_POST['mdp']))
                {
                    $_nom = $_POST['nom'];
                    $_prenom = $_POST['prenom'];
                    $_age = $_POST['age'];
                    $_ville = $_POST['ville'];
                    $_email = $_POST['email'];
                    $_mdp = $_POST['mdp'];
                    $_mdp = password_hash($_mdp, PASSWORD_BCRYPT);

                    $_verif = $_bdd->prepare("SELECT * FROM client WHERE emailClient = :email"); 
                    $_verif -> execute(array(
                        'email' => $_email,
                    ));
                    $_result = $_verif->rowCount();
                    if ($_result > 0) {
                        die("<p class=\"warning\"> Vous êtes déjà inscrit </p> <a href=\"./?page=register\"> Retour à la page d'inscription </a>");
                    }


                    if(strlen($_prenom) > 6 || strlen($_nom) > 20 || strlen($_ville) > 6 || strlen($_email) > 10 || strlen($_mdp) > 6)
                    {
                        if(is_numeric($_prenom) || is_numeric($_nom) || is_numeric($_ville) || is_numeric($_email))
                        {
                            echo "<p class=\"warning\"> veuillez saisir des lettres</p>";
                        }
                        if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) 
                        {
                            echo "<p class=\"warning\"> veuillez saisir un email valide</p>";
                        }
                        else 
                        {
                            $_req = $_bdd->prepare("INSERT INTO client (nomClient, prenomClient, ageClient, villeClient, emailClient, mdpClient) VALUES (:nom, :prenom, :age, :ville, :email, :mdp)");

                            $_req -> execute(array(
                                'nom' => $_nom,
                                'prenom' => $_prenom,
                                'age' => $_age,
                                'ville' => $_ville,
                                'email' => $_email,
                                'mdp' => $_mdp
                            ));

                            $_req->closeCursor();
                            echo "<p class=\"success\"> Vous êtes inscrit, vous pouvez maintenant vous connecter. </p>";
                        }
                    }
                    }
?>