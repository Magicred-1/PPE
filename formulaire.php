<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./asset/img/logo_tf2.png" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
	<script src="./js/app.js"></script>
    <script src="https://kit.fontawesome.com/cf196860e7.js" crossorigin="anonymous"></script>

    <title>PPE - Djason G.</title>
    
</head>
<body>
    <header>
        <a href="./"><img src="./asset/img/logo_tf2.png" alt="logo site streaming"></a>
        <h1><span> Des Ligues - Tous Les Sports</span></h1>
        <em id="toggle" class="fa fa-adjust"></em>
    </header>
    <main>

        <h2>Prêt à la compétition ? Remplissez le formulaire proposé dans cette page</h2>

        <section>
            <p>
                Tous les mois profitez de toutes les nouveautés et opportunités.
                A partir du mois prochain on vous propose toutes les séance de 
                sport sur vos support préférés.
            </p>
        </section>

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
            <input type="text" name="age" id="age">

            <label for="ville">Votre ville : </label>
            <input type="ville" id="ville" name="ville" placeholder="Paris .." required autofocus>

            <label for="email">Votre e-mail : </label>
            <input type="email" id="email" name="email" placeholder="monadresse@mail.com" required autofocus>

            <input type="submit" value="Envoyer">

        </form>

        <!-- modale  -->
        <div class="parent-modale" role="dialog">
            <figure class="modale">
                <button aria-label="closed">
                    <i class="fa-solid fa-close" aria-hidden="true"></i>
                </button>
                <img src="https://via.placeholder.com/500" alt="picture">
                <figcaption class="desc">
                    <h3>Titre</h3>
                    <p>
                    
                    </p>
                    <time> </time>
                </figcaption>
            </figure>
        </div>
    </main>
    <footer>
        <p>&copy; - Streaming - 2022.</p>
    </footer>
</body>
</html>