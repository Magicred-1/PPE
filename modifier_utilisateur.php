<?php 
    include_once './src/header.inc.php';
    fetchEventInfos(1, $_fetchEventRequest);
?>


        <form action="#" method="post">
            <label for="nom">Modifier votre nom : </label>
            <input type="text" id="nom" name="nom" value="<?php print $_SESSION['nom'] ?>" required autofocus>

            <label for="prenom">Modifier votre prénom : </label>
            <input type="text" id="prenom" name="prenom" value="<?php print $_SESSION['prenom'] ?>" required autofocus>

            <label for="email">Modifier votre âge : </label>
            <input type="text" name="age" id="age" value="<?php print $_SESSION['age'] ?>" required autofocus>

            <label for="ville">Modifier votre ville : </label>
            <input type="ville" id="ville" name="ville" value="<?php print $_SESSION['ville'] ?>" required autofocus>

            <label for="email">Modifier votre e-mail : </label>
            <input type="email" id="email" name="email" value="<?php print $_SESSION['email'] ?>" required autofocus>

            <label for="mdp">Modifier votre mot de passe : </label>
            <input type="password" id="mdp" name="mdp" value="<?php print $_SESSION['mdp'] ?>" required autofocus>

            <input type="submit" value="Envoyer">

        </form>
<?php 
    
    include_once './src/footer.inc.php';
?>