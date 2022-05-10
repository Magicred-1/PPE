<?php
    if (isset($_GET['idEvent']) && !empty($_SESSION['id'])) {
        $_date = new DateTime();
        $_date = $_date->format('Y-m-d H:i:s');
        $_idClient = $_SESSION['id'];
        $_idEvent = $_GET['idEvent'];

        $_req = $_bdd->prepare("INSERT INTO date (dateConsultation, idClient, idEvenement) 
        VALUES (:dateConsultation, :idClient, :idEvenement)");
        $_req -> execute(array(
            'dateConsultation' => $_date,
            'idClient' => $_idClient,
            'idEvenement' => $_idEvent
        ));
    }
?>