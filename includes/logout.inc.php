<?php 
ob_start();
if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['connected']))
    {
        session_destroy();
        header('Location: ?page=home');
    }
    else 
    {
        header('Location: ?page=home');
    }
ob_end_flush();
?>
