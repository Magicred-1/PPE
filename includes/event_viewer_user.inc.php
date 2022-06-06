<?php
    require_once './includes/connect_DB.inc.php';
    if (isset($_SESSION["connected"]) && isset($_GET["event_register"]) && isset($_SESSION["id"])) {
        $_idEvenement = $_GET["event_register"];
        $_date = new DateTime();
        $_date = $_date->format('Y-m-d H:i:s');
        $_idClient = $_SESSION['id'];

        $_req = $_bdd->prepare("INSERT INTO date (dateConsultation, idClient, idEvenement) VALUES (:dateConsultation, :idClient, :idEvenement)");
        $_req -> execute(array(
            'dateConsultation' => $_date,
            'idClient' => $_idClient,
            'idEvenement' => $_idEvenement
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>
