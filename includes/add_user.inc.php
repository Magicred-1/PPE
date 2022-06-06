<?php
if(isset($_GET['deleteUser']) && $_SESSION['isAdmin'] == 1) {
    if(isset($_SESSION['connected']) && $_SESSION['connected'] == true) {
        if($_SESSION['isAdmin'] == 1 && $_SESSION['id'] == $_GET['deleteUser']) {
            printf($_SESSION['id'] .' '. $_GET['deleteUser']);
            print "<p class=\"warning\"> Vous ne pouvez pas supprimer votre propre compte admin.</p>";
        } 
        else 
        {
            $_idClient = $_GET['deleteUser'];
            $_deleteReq = $_bdd->prepare("DELETE FROM client WHERE idClient = :idClient");
            $_deleteReq->execute(
                array(
                    'idClient' => $_idClient
                )
            );
            print "<p class=\"success\"> Utilisateur supprimé avec succès.</p>";
            header('Refresh: 1; URL=?page=admin_panel');
        }
    }
} /* editUser implementation later
if(isset($_GET['editUser']) && $_SESSION['isAdmin'] == 1) {
    if(isset($_SESSION['connected']) && $_SESSION['connected'] == true) {
        if($_SESSION['isAdmin'] == 1 && $_SESSION['id'] == $_GET['editUser']) {

            print "<p class=\"warning\"> Vous ne pouvez pas modifier votre propre compte admin.</p>";
        } 
        else 
        {
            $_idClient = $_GET['editUser'];
            $_editReq = $_bdd->prepare("SELECT * FROM client WHERE idClient = :idClient");
            $_editReq->execute(
                array(
                    'idClient' => $_idClient
                )
            );
            $_editUser = $_editReq->fetch();
            $_editUser['isAdmin'] == 1 ? $_admin = 'Oui' : $_admin = 'Non';

            switch($_POST) {
                // change the name of the user in the database if the name is not empty & if the name is different from the current one
                case $_nom != $_SESSION['nom']:
                    $_req = $_bdd->prepare("UPDATE client SET nomClient = :nom WHERE emailClient = :email");
                    $_req->BindValue('nom', $_nom);
                    $_req->BindValue('email', $_email);
                    $_req->execute();
                    $_SESSION['nom'] = $_nom;
                    break;
                // change the first name of the user in the database if the first name is not empty & if the first name is different from the current one
                case $_prenom != $_SESSION['prenom']:
                    $_req = $_bdd->prepare("UPDATE client SET prenomClient = :prenom WHERE emailClient = :email");
                    $_req -> BindValue('prenom', $_prenom);
                    $_req -> BindValue('email', $_email);
                    $_req->execute();
                    $_SESSION['prenom'] = $_prenom;
                    break;
    
                // change the age of the user in the database if the age is not empty & if the age is different from the current one
                case $_age != $_SESSION['age']:
                    $_req = $_bdd->prepare("UPDATE client SET ageClient = :age WHERE emailClient = :email");
                    $_req -> BindValue('age', $_age);
                    $_req -> BindValue('email', $_email);
                    $_req->execute();
                    $_SESSION['age'] = $_age;
                    break;
    
                // change the city of the user in the database if the city is not empty & if the city is different from the current one
                case $_ville != $_SESSION['ville']:
                    $_req = $_bdd->prepare("UPDATE client SET villeClient = :ville WHERE emailClient = :email");
                    $_req -> BindValue('ville', $_ville);
                    $_req -> BindValue('email', $_email);
                    $_req->execute();
                    $_SESSION['ville'] = $_ville;
                    break;
                
                // change the password of the user in the database if the password is not empty & if the password is different from the current one
                case $_mdp != $_SESSION['mdp']:
                    // hash the password to put in the database
                    $_mdp = password_hash($_mdp, PASSWORD_BCRYPT);
                    $_req = $_bdd->prepare("UPDATE client SET mdpClient = :mdp WHERE emailClient = :email");
                    $_req -> BindValue('mdp', $_mdp);
                    $_req -> BindValue('email', $_email);
                    $_req->execute();
                    // we update the user session with the new password
                    $_SESSION['mdp'] = $_mdp;
                    break;
            }
        }
    }
} */
print 
'<a id="changeInfos" href="#userInfosForm"><i class="fa fa-plus"></i> Ajouter un utilisateur</a>'.
'<h2 id="userInfosForm"> Ajouter un utilisateur </h2>' .
'<form id="userInfosForm" action="#"  method="post">'
    .'<label for="nom">Nom : </label>'
    .'<input type="text" id="nom" name="nom" required autofocus>'
    .'<label for="prenom">Prénom : </label>'
    .'<input type="text" id="prenom" name="prenom" required autofocus>'
    .'<label for="email">Email : </label>'
    .'<input type="email" id="email" name="email" required autofocus>'
    .'<label for="age">Âge : </label>'
    .'<input type="text" id="age" name="age" required autofocus>'
    .'<label for="ville">Ville : </label>'
    .'<input type="text" id="ville" name="ville" required autofocus>'
    .'<label for="mdp">Mot de passe : </label>'
    .'<input type="password" id="mdp" name="mdp" required autofocus>'
    .'<label for="isAdmin">Donner droits admin : </label>'
    .'<input type="checkbox" id="isAdmin" name="isAdmin" value="1">'
    .'<input name="add" type="submit" value="Envoyer">'
.'</form>';

if(isset($_POST["nom"]) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['ville']) && isset($_POST['email']) 
    && isset($_POST['mdp']) && isset($_POST['add']))
{
    $_nom = $_POST['nom'];
    $_prenom = $_POST['prenom'];
    $_age = $_POST['age'];
    $_ville = $_POST['ville'];
    $_email = $_POST['email'];
    $_mdp = $_POST['mdp'];
    $_mdp = password_hash($_mdp, PASSWORD_DEFAULT);

    isset($_POST['isAdmin']) ? $_isAdmin = 1 : $_isAdmin = NULL;

    $_req = $_bdd->prepare("INSERT INTO client (emailClient, mdpClient, nomClient, prenomClient, ageClient, villeClient, isAdmin) VALUES (:email, :mdp, :nom, :prenom, :age, :ville, :isAdmin)");
    $_req -> execute(array(
        'email' => $_email,
        'mdp' => $_mdp,
        'nom' => $_nom,
        'prenom' => $_prenom,
        'age' => $_age,
        'ville' => $_ville,
        'isAdmin' => $_isAdmin
    ));

    $_verif = $_bdd->prepare("SELECT * FROM client WHERE emailClient = :email");
    $_verif -> execute(array(
        'email' => $_email
    ));
    if ($_verif->rowCount() > 0 && $_verif->rowCount() < 2) {
        echo "<p class=\"success\"> Le compte a été crée avec succès </p>";
    }
    else 
    {
        echo "<p class=\"warning\"> Une erreur est survenue </p>";
    }
}
?>