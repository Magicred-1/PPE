<?php
    require_once './includes/connect_DB.inc.php';
    if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['connected'])) 
    {   
    $_idUser = $_SESSION['id'];
    $_req = $_bdd->prepare("SELECT nomEvenement, descEvenement, dateConsultation FROM date 
                            INNER JOIN evenement ON date.idEvenement = evenement.idEvenement 
                            WHERE date.idClient = :idUser
                            GROUP BY dateConsultation
                            ORDER BY date.dateConsultation DESC LIMIT 5");
    $_req -> execute(array(
        'idUser' => $_idUser
    ));
    if ($_req->rowCount()>0)
    {
        $_donnees = $_req->fetchAll();

            print
            '<h2> 5 derniers événements consultés : </h2>' .
                '<table>'
                    .'<tr>'
                        .'<th>Nom évenement</th>'
                        .'<th>Description évenement</th>'
                        .'<th>Date de consultation</th>'
                    .'</tr>';
                    foreach ($_donnees as $_userHistory) 
                    {
                        if ($_userHistory != null) 
                        {
                            print
                            '<tr>'
                                .'<td>'.htmlspecialchars($_userHistory['nomEvenement']).'</td>'
                                .'<td>'.htmlspecialchars($_userHistory['descEvenement']).'</td>'
                                .'<td>'.htmlspecialchars($_userHistory['dateConsultation']).'</td>'
                            .'</tr>';
                        }
                    }
                    print '</tr>'
                .'</table>';
        }
		else {
			print
			'<h2> 5 derniers événements consultés : </h2>'
			.'<table>'
				.'<tr>'
				   .'<td>Vous n\'avez pas encore consulté d\'évenement</td>'
				.'</tr>'
			.'</table>';
		}
    }
?> 