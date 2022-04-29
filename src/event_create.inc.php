<?php 
   require_once './src/connect_DB.inc.php';

        $_fetchEventRequest = $_bdd->prepare('SELECT * FROM evenement ORDER BY idEvenement DESC');
        $_fetchEventRequest -> execute();

        /* 
            Testing if the query is correct and function working
            fetchEventInfos($_req, 2);
        */

        // fetchEventInfos(2);

        function fetchEventInfos($_numberEvent) {
            $_eventIMG = $_req->fetchAll();

            foreach ($_eventIMG as $_imageInfos)
            {
                for ($i = 1; $i < $_numberEvent; $i++)
                        echo "<li data-image=\"{$_imageInfos['imageEvenement']}\"";
                        echo "data-title=\"{$_imageInfos['nomEvenement']}\"";
                        echo "data-description=\"{$_imageInfos['descEvenement']}\"";
                        echo "data-dates=\"{$_imageInfos['date_creation_evenement']}\">";
                        echo "<figure>";
                            echo "<img src=\"{$_imageInfos['imageEvenement']}\" alt=\"{$_imageInfos['descEvenement']}\">";
                            echo '<figcaption>';
                                echo '<h2>';
                                    echo "<i class=\"fa-solid fa-magnifying-glass\" aria-hidden=\"true\"></i>";
                                    echo "<em class=\"fa-solid fa-page\"></em> Agrandir";
                                echo '</h2>';
                            echo "</figcaption>";
                        echo "</figure>";
                    echo "</li>";
            }
        }
    };
?>