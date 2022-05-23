<?php 
        require_once './includes/connect_DB.inc.php';
        $_fetchEventRequest = $_bdd->prepare('SELECT DISTINCT * FROM evenement ORDER BY idEvenement ASC');
        $_fetchEventRequest -> execute();

        /* 
            Testing if the query is correct and function working
            fetchEventInfos($_numberEvent);
        */
                // fetchEventInfos(2);

        function fetchEventInfos($_numberEvent, $_bdd) {
            $_eventIMG = $_bdd->fetchAll();
            print "<section>".
            "<ul class=\"grid-picture-large preview\">";
            foreach ($_eventIMG as $_imageInfos)
            {
                    for ($_i = 0; $_i < $_numberEvent; $_i++)
                    {
                        print "<li data-image=\"{$_imageInfos['imageEvenement']}\"".
                                "data-title=\"Activité n° {$_imageInfos['idEvenement']} : {$_imageInfos['nomEvenement']}\"".
                                "data-description=\"{$_imageInfos['descEvenement']}\"".
                                "data-dates=\"{$_imageInfos['date_creation_evenement']}\">".
                                "<figure>".
                                "<img src=\"{$_imageInfos['imageEvenement']}\" alt=\"{$_imageInfos['descEvenement']}\">".
                                "<figcaption>".
                                        "<a>".
                                            "<i class=\"fa-solid fa-magnifying-glass\" aria-hidden=\"true\"></i>".
                                            "<em class=\"fa-solid fa-page\"></em> Agrandir".
                                        "</a>".
                                        "<h1> {$_imageInfos['nomEvenement']}</h1>".
                                        "<a class=\"register_button\" href=\"?event_register={$_imageInfos['idEvenement']}\">".
                                            "<i class=\"fa-solid fa-plus\" aria-hidden=\"true\"></i>".
                                        "<em class=\"fa-solid fa-page\"></em> S'inscrire".
                                    "</a>".
                                "</figcaption>".
                            "</figure>";
                    }
            }
            print "</ul>".
            "</section>";
            
        };
?>