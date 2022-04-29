<?php

if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['email'])) 
{
    require_once './src/connect_DB.inc.php';

    $_emailUser = $_SESSION['email'];
    $_req = $_bdd->prepare("SELECT nomClient, prenomClient, ageClient, emailClient, villeClient FROM client WHERE emailClient = :email");
    $_req -> execute(array(
        'email' => $_emailUser
    ));
    if ($_req)
    {
        $_donnees = $_req->fetchAll();

        foreach ($_donnees as $_user) 
        {
            print
                '<table>'
                    .'<tr>'
                        .'<th>Nom</th>'
                        .'<th>Prenom</th>'
                        .'<th>Âge</th>'
                        .'<th>Email</th>'
                        .'<th>Ville</th>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'.$_user['nomClient'].'</td>'
                        .'<td>'.$_user['prenomClient'].'</td>'
                        .'<td>'.$_user['ageClient'].'</td>'
                        .'<td>'.$_user['emailClient'].'</td>'
                        .'<td>'.$_user['villeClient'].'</td>'
                    .'</tr>'
                .'</table>';
        }
    }
}
else 
{
    print "<p class=\"warning\"> Veuillez vous connecter pour accéder à cette page </p>";
}
?>        