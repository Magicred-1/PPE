<?php
try {
    // On se connecte à MySQL
        $_host = "localhost";
        $_dbname = "ppe_web_mvc";
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
?>