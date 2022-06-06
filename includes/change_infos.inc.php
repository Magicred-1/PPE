<?php
    require_once './includes/connect_DB.inc.php';

    if (!empty($_POST) && isset($_SESSION['nom']) && isset($_SESSION['email']) && isset($_SESSION['prenom']) && isset($_SESSION['age']) && isset($_SESSION['ville']) && isset($_SESSION['mdp'])) {
        $_nom = $_POST['nom'];
        $_prenom = $_POST['prenom'];
        $_age = $_POST['age'];
        $_ville = $_POST['ville'];
        $_email = $_SESSION['email'];
        $_mdp = $_POST['mdp'];

        switch($_POST) {
            // change the name of the user in the database if the name is not empty & if the name is different from the current one
            case $_nom != $_SESSION['nom']:
                $_req = $_bdd->prepare("UPDATE client SET nomClient = :nom WHERE emailClient = :email");
                $_req->BindValue('nom', $_nom);
                $_req->BindValue('email', $_email);
                $_req->execute();
                $_SESSION['nom'] = $_nom;
                break;
            // change the first name of the user in the database if the first name is not empty & if the first name is different from the current one
            case $_prenom != $_SESSION['prenom']:
                $_req = $_bdd->prepare("UPDATE client SET prenomClient = :prenom WHERE emailClient = :email");
                $_req -> BindValue('prenom', $_prenom);
                $_req -> BindValue('email', $_email);
                $_req->execute();
                $_SESSION['prenom'] = $_prenom;
                break;

            // change the age of the user in the database if the age is not empty & if the age is different from the current one
            case $_age != $_SESSION['age']:
                $_req = $_bdd->prepare("UPDATE client SET ageClient = :age WHERE emailClient = :email");
                $_req -> BindValue('age', $_age);
                $_req -> BindValue('email', $_email);
                $_req->execute();
                $_SESSION['age'] = $_age;
                break;

            // change the city of the user in the database if the city is not empty & if the city is different from the current one
            case $_ville != $_SESSION['ville']:
                $_req = $_bdd->prepare("UPDATE client SET villeClient = :ville WHERE emailClient = :email");
                $_req -> BindValue('ville', $_ville);
                $_req -> BindValue('email', $_email);
                $_req->execute();
                $_SESSION['ville'] = $_ville;
                break;
            
            // change the password of the user in the database if the password is not empty & if the password is different from the current one
            case $_mdp != $_SESSION['mdp']:
                // hash the password to put in the database
                $_mdp = password_hash($_mdp, PASSWORD_BCRYPT);
                $_req = $_bdd->prepare("UPDATE client SET mdpClient = :mdp WHERE emailClient = :email");
                $_req -> BindValue('mdp', $_mdp);
                $_req -> BindValue('email', $_email);
                $_req->execute();
                // we update the user session with the new password
                $_SESSION['mdp'] = $_mdp;
                break;
        }


        /* 
            We return a success message if the req is pushed
            and go back to the member panel.
        */
        if ($_req) {
            print "<section>
            <p class=\"success\"> Vos informations ont bien été modifiées </p>";
            print "<a href=\"?page=member_panel\"> Retour à l'espace membre </a>
            </section>";
        }
    }
?>