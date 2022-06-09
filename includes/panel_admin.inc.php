<?php

if ($_SESSION['isAdmin'] == 1) {
} else {
    header('Location: ?page=home');
}
    include_once './includes/get_numbers_events_consulted.inc.php';
    include_once './includes/fetch_all_members.inc.php';
    include_once './includes/add_user.inc.php';
?>