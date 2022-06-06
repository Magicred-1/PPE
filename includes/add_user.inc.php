<?php
if(isset($_GET['deleteUser']) && $_SESSION['isAdmin'] == 1) {
    if(isset($_SESSION['connected']) && $_SESSION['connected'] == true) {
        if($_SESSION['isAdmin'] == 1 && $_SESSION['id'] == $_GET['deleteUser']) {
            printf($_SESSION['id']. "" . $_GET['deleteUser']);
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
            print "<p class=\"warning\"> Vous ne pouvez pas supprimer votre propre compte admin.</p>";
        }
    }
}
print 
'<a id="changeInfos" href="#userInfosForm">Ajouter un utilisateur</a>'.
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