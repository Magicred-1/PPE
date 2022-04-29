<?php
    ob_start();
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./asset/img/logo_tf2.png" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" crossorigin="anonymous">

    <title>PPE - Djason G.</title>
    
</head>
<body>
    <header>
        <a href="./"><img src="./asset/img/logo_tf2.png" alt="logo site streaming"></a>
        <h1><span> Des Ligues - Tous Les Sports</span></h1>
        <?php 
            isset($_SESSION['email']) ? print '<p>Bienvenue, '.$_SESSION['email'].' 
            <a id="logout" href="./deconnexion.php"><i class="fa fa-sign-out-alt"></i> Déconnexion</a> 
            <a id="user" href="./espace_membre.php"><i class="fa fa-user"></i> Espace Membre</a></p>' 
            : print '<p><a id="logout" href="./login.php"><i class="fa fa-sign-in-alt"></i> Connexion</a></p>';
        ?>
    </header>
    <main>

        <h2>Prêt à la compétition ? Remplissez le formulaire proposé dans cette page</h2>

        <section>
            <p>
                Tous les mois profitez de toutes les nouveautés et opportunités.
                À partir du mois prochain on vous propose toutes les séance de 
                sport sur vos support préférés.
            </p>
        </section>