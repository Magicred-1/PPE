<?php
    if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['connected'])) 
    {   
    $_emailUser = $_SESSION['email'];
    $_req = $_bdd->prepare("SELECT nomClient, prenomClient, emailClient, ageClient, villeClient FROM client WHERE emailClient = :email");
    $_req -> execute(array(
        'email' => $_emailUser
    ));
    if ($_req)
    {
        $_donnees = $_req->fetchAll();

        foreach ($_donnees as $_user) 
        {
            print
            '<h2> Voici vos informations : </h2>' .
                '<table>'
                    .'<tr>'
                        .'<th>Nom</th>'
                        .'<th>Prénom</th>'
                        .'<th>Email</th>'
                        .'<th>Âge</th>'
                        .'<th>Ville</th>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'.$_user['nomClient'].'</td>'
                        .'<td>'.$_user['prenomClient'].'</td>'
                        .'<td>'.$_user['emailClient'].'</td>'
                        .'<td>'.$_user['ageClient'].'</td>'
                        .'<td>'.$_user['villeClient'].'</td>'
                    .'</tr>'
                .'</table>';
        }
            print 
            // Button to change the infos of the user
            '<a id="changeInfos" href="#userInfosForm">Modifier mes informations</a>'

            // Button to open the form to delete user account
            .'<a id="deleteUser" href="#deleteForm">Supprimer mon compte</a>';

            include_once './includes/change_infos.inc.php';
            
            print '<form id="userInfosForm" action="#" method="post">'
                .'<label for="nom">Modifier votre nom : </label>'
                .'<input type="text" id="nom" name="nom" value="'.$_SESSION['nom'].'" required autofocus>'
                .'<label for="prenom">Modifier votre prénom : </label>'
                .'<input type="text" id="prenom" name="prenom" value="'.$_SESSION['prenom'].'" required autofocus>'
    
                .'<label for="email">Modifier votre âge : </label>'
                .'<input type="text" name="age" id="age" value="'.$_SESSION['age'].'" required autofocus>'
    
                .'<label for="ville">Modifier votre ville : </label>'
                .'<input type="ville" id="ville" name="ville" value="'.$_SESSION['ville'].'" required autofocus>'
    
                .'<label for="email">Modifier votre e-mail : </label>'
                .'<input type="email" id="email" name="email" value="'.$_SESSION['email'].'" required autofocus>'
    
                .'<label for="mdp">Modifier votre mot de passe : </label>'
                .'<input type="password" id="mdp" name="mdp" value="'.$_SESSION['mdp'].'" required autofocus>'
    
                .'<input name="change" type="submit" value="Envoyer">'
    
            .'</form>';

            print '<form id="deleteForm" action="?page=delete_user" method="post">'
            .'<label for="email">Veuillez entrez votre e-mail : </label>'
            .'<input type="email" id="email" name="email" placeholder="Email .." required autofocus>'

            .'<label for="mdp">Veuillez entrez mot de passe : </label>'
            .'<input type="password" id="mdp" name="mdp" placeholder="Mot de passe .." required autofocus>'

            .'<input name="delete" type="submit" value="Supprimer">'

        .'</form>';
        }
    }
?>        