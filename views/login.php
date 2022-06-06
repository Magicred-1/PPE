<?php 
    if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['connected']))
    {
        header ('Location: ./');
    }
    
    fetchEventInfos(1, $_fetchEventRequest);
        
    include_once './includes/login.inc.php'; 
?>
      
        <form action="#" method="post">
            <label for="email">Votre e-mail : </label>
            <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required autofocus>

            <label for="mdp">Votre mot de passe : </label>
            <input type="password" id="mdp" name="mdp" placeholder="Entrez votre mot de passe ..." required autofocus>

            <input type="submit" name="submit" value="Envoyer">

        </form>