<?php
    ob_start();
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ob_clean();
    require_once './src/event_create.inc.php';
    require_once './src/get_date_event_user.inc.php';
    require_once './src/connect_DB.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./asset/img/favicon.png" />
    <link rel="icon" type="image/png" href="./asset/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./asset/img/favicon-16x16.png" sizes="16x16" />

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" crossorigin="anonymous">

    <title>Maison Des Ligues - Tous Les Sports</title>
    
</head>
<body>
    <header>
        <a href="./"><img src="./asset/img/header_logo.png" alt="logo site streaming"></a>
        <h1><span> Maison des Ligues - Tous Les Sports</span></h1>
        <?php 
            isset($_SESSION['connected']) ? print '<p id="welcome_text">Bienvenue, '.$_SESSION['prenom'].' '.$_SESSION['nom'].'  </p>'.'
            <a id="logout" href="./deconnexion.php"><i class="fa fa-sign-out-alt"></i> Déconnexion</a> 
            <a id="user" href="./espace_membre.php"><i class="fa fa-user"></i> Espace Membre</a></p>' 
            : print '<p><a id="logout" href="./login.php"><i class="fa fa-sign-in-alt"></i> Connexion</a></p>';
        ?>
    </header>
    <main>
        <?php 
            !isset($_SESSION['connected']) ? print '<h2>Prêt à la compétition ? Remplissez le formulaire proposé dans cette page</h2>' 
            : print '<h2>Bienvenue sur le site des ligues, veuillez choisir une activité !</h2>'; 
        ?>

        <section>
            <p>
                Tous les mois profitez de toutes les nouveautés et opportunités.
                À partir du mois prochain on vous propose toutes les séances de 
                sport sur vos supports préférés.
            </p>
        </section>