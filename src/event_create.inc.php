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
                        print "<li data-image=\"{$_imageInfos['imageEvenement']}\"";
                        print "data-title=\"{$_imageInfos['nomEvenement']}\"";
                        print "data-description=\"{$_imageInfos['descEvenement']}\"";
                        print "data-dates=\"{$_imageInfos['date_creation_evenement']}\">";
                        print "<figure>";
                            print "<img src=\"{$_imageInfos['imageEvenement']}\" alt=\"{$_imageInfos['descEvenement']}\">";
                            print '<figcaption>';
                                print '<h2>';
                                    print "<i class=\"fa-solid fa-magnifying-glass\" aria-hidden=\"true\"></i>";
                                    print "<em class=\"fa-solid fa-page\"></em> Agrandir";
                                print '</h2>';
                            print "</figcaption>";
                        print "</figure>";
                    print "</li>";
            }
        }
    };
?>