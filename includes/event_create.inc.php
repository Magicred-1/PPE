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
            print "<section>".
            "<ul class=\"grid-picture-large preview\">";
			for ($_i = 0; $_i < $_numberEvent; $_i++)
            {
				foreach ($_eventIMG as $_imageInfos)
				{
							print "<li data-image=\"{$_imageInfos['imageEvenement']}\"".
									"data-title=\"Activité n° {$_imageInfos['idEvenement']} : {$_imageInfos['nomEvenement']}\"".
									"data-description=\"{$_imageInfos['descEvenement']}\"".
									"data-dates=\"{$_imageInfos['date_creation_evenement']}\">".
									"<figure>".
									"<img src=\"{$_imageInfos['imageEvenement']}\" alt=\"{$_imageInfos['descEvenement']}\">".
									"<figcaption>".
												"<i class=\"fa-solid fa-eye\"></i>";
												if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1) {
													print "2 inscrit(s)";
												}
											print
											"<h1> {$_imageInfos['nomEvenement']}</h1>";
											if (isset($_SESSION['connected']))
											{
												print "<a class=\"register_button\" href=\"?event_register={$_imageInfos['idEvenement']}\">".
													"<em class=\"fa-solid fa-plus\"></em> S'inscrire";
											}
										print
										"</a>".
									"</figcaption>".
								"</figure>";
				}
			}
            print "</ul>".
            "</section>".
			'<div id="modale" class="parent-modale" role="dialog" aria-label="true">'.
					'<figure class="modale">'.
						'<button aria-label="closed">'.
							'<i class="fa-solid fa-times" aria-hidden="true"></i>'.
						'</button>'.
						'<img src="https://via.placeholder.com/500" alt="picture" />'.
						'<figcaption class="desc">'.
							'<h3>title</h3>'.
							'<p></p>'.
							'<time datetime="2022-03-20">Years :</time>'.
						'</figcaption>'.
					'</figure>'.
				'</div>';
            
        };
?>