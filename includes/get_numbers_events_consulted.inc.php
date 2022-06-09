<?php
    require_once './includes/connect_DB.inc.php';
    if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['connected'])) 
    {   
    $_req = $_bdd->prepare("SELECT COUNT(dateConsultation) AS 'Nombre de consultation', E.nomEvenement FROM date D 
                            INNER JOIN evenement E ON D.idEvenement = E.idEvenement
                            INNER JOIN client C ON c.idClient = D.idClient
                            GROUP BY E.nomEvenement");
    $_req -> execute();
    if ($_req->rowCount()>0)
    {
        $_donnees = $_req->fetchAll();

            print
            '<h2> Nombres d\'inscrits par évenement </h2>'
            .'<table>'
                .'<tr>'
                    .'<th>Nom évenement</th>'
                    .'<th>Nombre d\'inscriptions</th>'
                .'</tr>';
                foreach ($_donnees as $_user) {
                    print
                        '<tr>'
                            .'<td>'.$_user['nomEvenement'].'</td>'
                            .'<td>'.$_user['Nombre de consultation'].'</td>'
                        .'</tr>';
                }
        }
		else 
        {
			print
			'<h2> Nombres d\'inscrits par évenement </h2>'
			.'<table>'
				.'<tr>'
				   .'<td>Vous n\'avez pas encore consulté d\'évenement</td>'
				.'</tr>'
			.'</table>';
		}
    }
?> 