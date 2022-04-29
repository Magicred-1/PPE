<?php

if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['email'])) 
{
    require_once './src/connect_DB.inc.php';

    $_emailUser = $_SESSION['email'];
    $_req = $_bdd->prepare("SELECT nomClient, prenomClient, emailClient, villeClient, ageClient FROM client WHERE emailClient = :email");
    $_req -> execute(array(
        'email' => $_emailUser
    ));
    if ($_req)
    {
        $_donnees = $_req->fetchAll();

        foreach ($_donnees as $_user) 
        {
            print
                '<ul>' .
                    '<li>' . "Nom : " . $_user['nomClient'] . '</li>' .
                    '<li>' . "Prénom : " . $_user['prenomClient'] . '</li>' .
                    '<li>' . "Âge : " . $_user['ageClient'] . '</li>' .
                    '<li>' . "Email : " . $_user['emailClient'] . '</li>' .
                    '<li>' . "Ville : " . $_user['villeClient'] . '</li>' .
                '</ul>';
        }
    }
}
else 
{
    return null;
}
?>        