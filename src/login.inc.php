<?php
    <?php
    try {
        $_host = "localhost";
        $_dbname = "ppe_web";
        $_user = "root";
        $_password = getenv('MYSQL_SECURE_PASSWORD');

        $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            
        $_bdd = new PDO("mysql:host={$_host};dbname={$_dbname};", $_user, $_password);
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        if(isset($_POST['email']) && isset($_POST['mdp']))){
        {

            $_email = $_POST['email'];
            $_mdp = $_POST['mdp'];

            if(strlen($_email) > 10 || strlen($_mdp) > 6){
            {
                if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                    print "<p class=\"warning\"> veuillez saisir un email valide</p>";
                }
                else 
                {
                    $_bdd->exec("SELECT FROM `client`(nomClient, prenomClient, ageClient, villeClient, emailClient) VALUES ('$_nom','$_prenom','$_age','$_ville','$_email')");
                    print "<p class=\"success\"> Connexion réussie </p>";
                    session_start();
                    $_SESSION['email'] = $_email;
                    $_SESSION['mdp'] = $_mdp;
                    header('Location: ./index.php');
                }
                else {
                    print "<p class=\"warning\"> Veuillez saisir un mot de passe valide</p>";
                }
            }  
        }
?>