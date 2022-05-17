<?php
    if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['email']))
    {
        header ('Location: ./');
    }
    
    fetchEventInfos(1, $_fetchEventRequest);
        
    include_once './includes/formulaire_verif.inc.php'; 
?>   
                
        <form action="#" method="post">
            <label for="nom">Votre nom : </label>
            <input type="text" id="nom" name="nom" placeholder="Myxa" required autofocus>

            <label for="prenom">Votre prénom : </label>
            <input type="text" id="prenom" name="prenom" placeholder="Gregory" required autofocus>

            <label for="email">Âge : </label>
            <input type="text" name="age" id="age" placeholder="Âge" required autofocus>

            <label for="ville">Votre ville : </label>
            <input type="ville" id="ville" name="ville" placeholder="Paris .." required autofocus>

            <label for="email">Votre e-mail : </label>
            <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required autofocus>

            <label for="mdp">Votre mot de passe : </label>
            <input type="password" id="mdp" name="mdp" placeholder="mot de passe .." required autofocus>

            <input type="submit" value="Envoyer">

        </form>