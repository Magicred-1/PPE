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
                        if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
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

                            while ($_donnees = $_req->fetch(PDO::FETCH_ASSOC)) 
                            {
                                if (password_verify($_mdp, $_donnees['mdpClient'])) 
                                {
                                    $_SESSION['email'] = $_donnees['emailClient'];
                                    $_SESSION['nom'] = $_donnees['nomClient'];
                                    $_SESSION['prenom'] = $_donnees['prenomClient'];
                                    $_SESSION['age'] = $_donnees['ageClient'];
                                    $_SESSION['ville'] = $_donnees['villeClient'];
                                    $_SESSION['mdp'] = $_donnees['mdpClient'];
                                    $_SESSION['connected'] = true;
                                    print "<p class=\"success\"> Vous êtes connecté </p>";
                                    print_r($_SESSION);

                                    sleep(2);
                                    header('Location: ?page=home');
                                }
                        }
                    }
                }
            }
?>