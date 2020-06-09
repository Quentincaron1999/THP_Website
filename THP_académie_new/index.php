<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php")?>
</head>

<body>

    <?php include("components/navbar.php")?>

    <!-- Vidéo -->
    <div class="video is-full-mobile">
        <iframe class="video-iframe " allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/bk4aubRIL-4?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=bk4aubRIL-4&amp;controls=0"></iframe>
    </div>

    <!-- Principal Banner -->
    <div class="container is-widescreen">
        <div class="banner-presentation is-full-mobile"> 
            <img src="assets/img/banner-index.png">
        </div>
    </div>

    <!-- Session's Card -->
    <div class="container is-widescreen">
        <div class="full-card-home"> 
            <!-- Wide Card -->
            <div class="columns principal card-home is-mobile">
                
                <div class="column is-full card-one">
                    <h1>Session d'été 2020</h1>
                    <a class="button is-primary" href="https://google.com" target="_blank">S'inscrire</a>
                    <a class="button is-primary" href="Session-Ete.php">Programme</a>
                </div>
            </div>

            <!-- Half Card -->
            <div class="columns card-home is-mobile">
                <div class="column card-two">
                    <h1>Session Automne 2020</h1>
                </div>
                <div class="column card-three">
                    <h1>Session Printemps 2021</h1>
                </div>
            </div>
        </div>
    </div>


    
    <!-- Maps -->
    <iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDq1G7DlVkMkuf5YdPcltF4jFLdBAJBS9s&amp;q=Forcalquier+&amp;zoom=7" width="100%" height="450"></iframe>

    <?php include("components/footer.php")?>

</body>
</html>