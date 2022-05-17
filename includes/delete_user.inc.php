<?php
    require_once './includes/connect_DB.inc.php';

    if (!empty($_POST) && isset($_SESSION['email']) && isset($_SESSION['mdp'])) {
        $_email = $_SESSION['email'];
        $_mdp = $_POST['mdp'];
        $_mdp = password_hash($_mdp, PASSWORD_BCRYPT);

        $_req = $_bdd->prepare("DELETE * FROM client WHERE emailClient = :email AND mdpClient = :mdp");
        $_req -> execute(array(
            'mdp' => $_mdp,
            'email' => $_email
        ));

        if ($_req) {
            print "<section>
                <p class=\"success\"> Votre compte a été supprimée avec succès </p>
            </section>";
            sleep(2);
            session_destroy();
        }
        else
        {
            print "<section>
            <p class=\"error\"> Votre compte n'a pas pu être supprimée </p>
            </section>";
        }
    }
?>