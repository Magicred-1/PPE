<?php 
    if (session_status() == PHP_SESSION_NONE && !isset($_SESSION['connected']))
    {
        header ('Location: ./');
    }
    fetchEventInfos(1, $_fetchEventRequest);
    include_once './includes/user_history.inc.php';
    include_once './includes/espace_membre.inc.php';
?>