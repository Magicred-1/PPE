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
        <em id="toggle" class="fa fa-adjust"></em>
        <?php session_status() == PHP_SESSION_ACTIVE ? print $_SESSION['email'] : print '<a href="./login.php"><p>Se connecter </p></a> '; ?>
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