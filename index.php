<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TikTok - Make your Day</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e40f017040.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <header>
        <div id="header_container">
            <div id="container_logo">
                <img src="tiktok_logo.png" alt="TikTok Logo">
            </div>

            <div>
                <div id="search_bar_container">
                    <input type="text" placeholder="Rechercher des comptes" id="search_bar">
                    <div class="vertical_line"></div>
                    <div>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>

            </div>

            <div class="button_container">
                <div>
                    <button id="upload_button">Téléverser</button>
                </div>
                <div>
                    <button id="logging_button">Connexion</button>
                </div>
                <div id="container_logo_dot">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section>
            <aside>
                <div>
                    <i class="fa-solid fa-house"></i>
                    <a href="">Pour toi</a>
                </div>

                <div class="category">
                    <i class="fa-solid fa-user-group"></i>
                    <a href="">Abonnements</a>
                </div>

                <div class="category">
                    <i class="fa-solid fa-video"></i>
                    <a href="">Live</a>
                </div>

                <div class="horizontal_line"></div>

                <div>
                    <p id="login_text">Connecte-toi pour suivre des créateurs, aimer des vidéos et voir les commentaires.</p>

                    <button class="second_logged_button">Connexion</button>
                </div>


                <div class="horizontal_line"></div>

                <div class="suggest_account_container">
                    <p>Compte suggérés</p>

                    <div>
                        <div>
                            <div class="fake_photo"></div>
                            <p class="artist_name">edsheeran</p>
                            <i class="block">Ed Sheeran</i>
                        </div>
                    </div>

                    <div>
                        <div>
                            <div class="fake_photo"></div>
                            <p class="artist_name">ye</p>
                            <i class="block">Ye</i>
                        </div>
                    </div>

                    <div>
                        <div>
                            <div class="fake_photo"></div>
                            <p class="artist_name">davidguetta</p>
                            <i class="block">David Guetta</i>
                        </div>
                    </div>

                    <div>
                        <div>
                            <div class="fake_photo"></div>
                            <p class="artist_name">angele_vl</p>
                            <i class="block">Angèle</i>
                        </div>
                    </div>

                    <div>
                        <div>
                            <div class="fake_photo"></div>
                            <p class="artist_name">victoriabeckham</p>
                            <i class="block">Victoria Beckham</i>
                        </div>
                    </div>

                    <p id="see_more">Tout afficher</p>
                </div>
            </aside>
            <div class="video_container"></div>
        </section>
    </main>
</body>
</html>
