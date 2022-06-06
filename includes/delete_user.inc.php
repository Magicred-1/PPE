<?php
    require_once './includes/connect_DB.inc.php';

    /*  
    we check if the user is connected and the infos 
    submitted are correct to delete the user account
    */
    if (!empty($_POST['delete']) && isset($_SESSION['email']) && isset($_SESSION['mdp'])) {
        $_email = $_POST['email'];
        $_mdp = $_POST['mdp'];

        /* 
            we check if the user exist in the database
            the infos submitted are correct to delete the user account
        */
        $_req = $_bdd->prepare("SELECT * FROM client WHERE emailClient = :email");
        $_req -> execute(array(
            'email' => $_email
        ));
        // printf("<p class=\"success\">%s</p>", $_req->rowCount());
        $_verif = $_req->fetch();
            // we delete the user account
        if (password_verify($_mdp, $_verif['mdpClient'])) {
            $_req = $_bdd->prepare("DELETE FROM client WHERE emailClient = :email");
            $_req -> execute(array(
                'email' => $_email
            ));
            print "<p class=\"success\"> Votre compte a bien été supprimé !</p>";
            sleep(3);
            session_destroy();
        }
    }
    else
    {
        print "<section>
            <p class=\"warning\"> Vous n'êtes pas connecté ou les informations saisies sont incorrectes </p>
        </section>";
    }
?>