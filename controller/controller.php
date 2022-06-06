<?php 
    if(isset($_GET['page'])) {
                $page = $_GET['page'];
                switch($page) 
                {
                    case 'login':
                        include_once './views/login.php';
                        break;
                    case 'register':
                        include_once './views/formulaire.php';
                        break;
                    case 'logout':
                        include_once './views/deconnexion.php';
                        break;
                    case 'member_panel':
                        include_once './views/espace_membre.php';
                        break;
                    case 'admin_panel':
                        include_once './views/panel_admin.php';
                        break;    
                    case 'delete_user':
                        include_once './views/delete_user.php';
                        break;
                    case 'panel_admin':
                        include_once './views/panel_admin.php';
                        break;
                    default:
                        include_once './views/home.php';
                        break;
                }
            } 
            else 
            {
                include_once './views/home.php';
            }
?>