<?php 
        require_once './includes/connect_DB.inc.php';
        $_fetchEventRequest = $_bdd->prepare('SELECT * FROM evenement ORDER BY idEvenement ASC');
        $_fetchEventRequest -> execute();

        /* 
            Testing if the query is correct and function working
            fetchEventInfos($_numberEvent);
        */

        // fetchEventInfos(2);

        function fetchEventInfos($_numberEvent, $_bdd) {
            $_eventIMG = $_bdd->fetchAll();
            print "<section>";
            print "<ul class=\"grid-picture-large preview\">";
            foreach ($_eventIMG as $_imageInfos)
            {
                    for ($_i = 0; $_i < $_numberEvent; $_i++)
                    {
                            print "<li data-image=\"{$_imageInfos['imageEvenement']}\"";
                            print "data-title=\"Activité n° {$_imageInfos['idEvenement']} : {$_imageInfos['nomEvenement']}\"";
                            print "data-description=\"{$_imageInfos['descEvenement']}\"";
                            print "data-dates=\"{$_imageInfos['date_creation_evenement']}\">";
                            print "<figure>";
                                print "<img src=\"{$_imageInfos['imageEvenement']}\" alt=\"{$_imageInfos['descEvenement']}\">";
                                print '<figcaption>';
                                    print '<h2>';
                                        print "<a href=\"?idEvenement={$_imageInfos['idEvenement']}\"";
                                        print "<i class=\"fa-solid fa-magnifying-glass\" aria-hidden=\"true\"></i>";
                                        print "<em class=\"fa-solid fa-page\"></em> Agrandir";
                                        print "</a>";
                                    print '</h2>';
                                print "</figcaption>";
                            print "</figure>";
                        print "</li>";
                    }
            }
            print "</ul>";
            print "</section>";
            
        };
?>