<?php
    require_once './src/connect_DB.inc.php';

    if (!empty($_POST) && isset($_SESSION['nom']) && isset($_SESSION['email']) && isset($_SESSION['prenom']) && isset($_SESSION['age']) && isset($_SESSION['ville']) && isset($_SESSION['mdp'])) {
        $_nom = $_POST['nom'];
        $_prenom = $_POST['prenom'];
        $_age = $_POST['age'];
        $_ville = $_POST['ville'];
        $_email = $_SESSION['email'];
        $_mdp = $_POST['mdp'];
        $_mdp = password_hash($_mdp, PASSWORD_BCRYPT);

        $_req = $_bdd->prepare("UPDATE client SET nomClient = :nom, prenomClient = :prenom, ageClient = :age, villeClient = :ville, mdpClient = :mdp WHERE emailClient = :email");
        $_req -> execute(array(
            'nom' => $_nom,
            'prenom' => $_prenom,
            'age' => $_age,
            'ville' => $_ville,
            'mdp' => $_mdp,
            'email' => $_email
        ));

        if ($_req) {
            print "<section>
            <p class=\"success\"> Vos informations ont bien été modifiées </p>";
            print "<a href=\"./espace_membre.php\"> Retour à l'espace membre </a>
            </section>";
        }
    }
?>