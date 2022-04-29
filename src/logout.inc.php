<?php 
ob_start();
    if (session_status() == PHP_SESSION_ACTIVE) 
    {
        session_destroy();
        header('Location: ./');
    }
ob_end_flush();
?>
