<?php 
    include_once './src/header.inc.php';
    fetchEventInfos(4, $_fetchEventRequest);
            if(isset($_SESSION['connected'])){
                echo '';
            } 
            else
            {
                echo '<a href="./formulaire.php">Cliquez ici pour commencer</a>';
            }
    include_once './src/footer.inc.php'; 
?>
