<?php
    include_once './src/header.inc.php'; 
    if (isset($_SESSION['prenom'])) {
        header ('Location: ./');
    }
?>
        <section>
            <ul class="grid-picture-large">
                <li data-image="./asset/img/limitless_tf2_poster.png"
                data-title="Limitless" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/img/limitless_tf2_poster.png" alt="image film">
                        <figcaption>
                            <h2>
                                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>

                                </i>
                                <em class="fa-solid fa-page"></em>
                                    Agrandir
                            </h2>
                        </figcaption>
                    </figure>
                </li>
                <li data-image="./asset/img/safe_house_tf2_poster.png"
                data-title="Safe House" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/img/safe_house_tf2_poster.png" alt="image film">
                        <figcaption>
                            <h2>
                                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>

                                </i>
                                <em class="fa-solid fa-page"></em>
                                    Agrandir
                            </h2>
                        </figcaption>
                    </figure>
                </li>
                <li data-image="./asset/img/expendables2_tf2_poster.png"
                data-title="Expendables 2" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/img/expendables2_tf2_poster.png" alt="image film">
                        <figcaption>
                            <h2>
                                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>

                                </i>
                                <em class="fa-solid fa-page"></em>
                                    Agrandir
                            </h2>
                        </figcaption>
                    </figure>
                </li>
                <li data-image="./asset/img/teamfortress2_tf2_sfm.jpeg"
                data-title="Team Fortress 2" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/img/teamfortress2_tf2_sfm.jpeg" alt="image film">
                        <figcaption>
                            <h2>
                                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>

                                </i>
                                <em class="fa-solid fa-page"></em>
                                    Agrandir
                            </h2>
                        </figcaption>
                    </figure>
                </li>
                <li data-image="./asset/img/jack_griffith_tf2_poster.jpeg"
                data-title="Limitless" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/img/jack_griffith_tf2_poster.jpeg" alt="image film">
                        <figcaption>
                            <h2>
                                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>

                                </i>
                                <em class="fa-solid fa-page"></em>
                                    Agrandir
                            </h2>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </section>
        
        <?php include_once './src/formulaire_verif.inc.php'; ?>   
                
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

        <?php include_once './src/footer.inc.php'; ?>