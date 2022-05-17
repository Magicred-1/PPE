<?php 
    fetchEventInfos(4, $_fetchEventRequest);
            if(isset($_SESSION['connected'])){
                echo '';
            } 
            else
            {
                echo '<a href="?page=register">Cliquez ici pour commencer</a>';
            }
    include_once './includes/footer.inc.php'; 
?>
