<?php 
    fetchEventInfos(4, $_fetchEventRequest);
    isset($_SESSION['connected']) ? 
    print '' : 
    print '<a href="?page=register">Cliquez ici pour commencer</a>';
    include_once './includes/footer.inc.php'; 
?>
