<?php
    $_req = $_bdd->prepare("SELECT * FROM client");
    $_req -> execute();

    if ($_req)
    {
        $_donnees = $_req->fetchAll();

        print '<h2> Listes des utilisateurs </h2>' .
        '<table>'
            .'<tr>'
                .'<th>Identifiant</th>'
                .'<th>Nom</th>'
                .'<th>Prénom</th>'
                .'<th>Email</th>'
                .'<th>Âge</th>'
                .'<th>Ville</th>'
                .'<th>Admin ?</th>'
                .'<th>Actions</th>'
            .'</tr>';

        foreach ($_donnees as $_user) 
        {
            $_user['isAdmin'] == 1 ? $_admin = 'Oui' : $_admin = 'Non';
            print
                '<tr>'
                .'<td>'.$_user['idClient'].'</td>'
                .'<td>'.$_user['nomClient'].'</td>'
                .'<td>'.$_user['prenomClient'].'</td>'
                .'<td>'.$_user['emailClient'].'</td>'
                .'<td>'.$_user['ageClient'].'</td>'
                .'<td>'.$_user['villeClient'].'</td>'
                .'<td>'.$_admin.'</td>'
                .'<td><a href="#"><i class="fa fa-edit"></i> Modifier</a><a href="?page=admin_panel&deleteUser='.$_user['idClient'].'"><i class="fa fa-xmark"></i> Supprimer</a></td>'
                .'</tr>';
        }
    print '</tr>'
    .'</table>';
    }
?>