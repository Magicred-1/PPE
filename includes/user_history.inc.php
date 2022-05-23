<?php
    require_once './includes/connect_DB.inc.php';
    if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['connected'])) 
    {   
    $_idUser = $_SESSION['id'];
    $_req = $_bdd->prepare("SELECT nomEvenement, descEvenement, dateConsultation FROM date 
                            INNER JOIN evenement ON date.idEvenement = evenement.idEvenement 
                            WHERE date.idClient = :idUser
                            ORDER BY date.dateConsultation DESC LIMIT 5");
    $_req -> execute(array(
        'idUser' => $_idUser
    ));
    if ($_req)
    {
        $_donnees = $_req->fetchAll();

            print
            '<h2> Les 5 derniers événements que vous avez consultés : </h2>' .
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
                                .'<td>'.$_userHistory['nomEvenement'].'</td>'
                                .'<td>'.$_userHistory['descEvenement'].'</td>'
                                .'<td>'.$_userHistory['dateConsultation'].'</td>'
                            .'</tr>';
                        }
                        else 
                        {
                            print '<p class="warning"> Vous n\'avez consulté aucun événement </p>';
                        }
                    }
                    print '</tr>'
                .'</table>';
        }
    }
?> 