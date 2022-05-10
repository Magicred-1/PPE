<?php 
ob_start();
if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['connected']))
    {
        session_destroy();
        header('Location: ./');
    }
    else 
    {
        header('Location: ./');
    }
ob_end_flush();
?>
