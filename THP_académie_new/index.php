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
    <div class="container is-widescreen is-hidden-mobile">
        <div class="banner-presentation is-full-mobile"> 
            <img src="assets/img/banner-index.png">
        </div>
    </div>

    <!-- Session's Card -->
    <div class="container is-widescreen">
        <div class="full-card-home"> 
            <!-- Wide Card -->
            <div class="columns principal card-home is-mobile mt-6-mobile">
                <div class="column is-full card-one">
                    <h1 class="pt-6 title">Session d'été 2020</h1>
                    <p class="date-color"><strong style="color:#FFFFFF;">du 31 juillet au 2 août 2020</strong></p>
                    <a class="button is-primary mt-6 ivoire" href="http://thpacademielestagedetraildu31juilletau2aout2020.ikinoa.com/" target="_blank">S'inscrire</a>
                    <a class="button is-primary mt-6 ivoire" href="Session-Summer.php">Programme</a>
                </div>
            </div>

            <!-- Half Card -->
            <div class="columns card-home is-mobile is-multiline is-4 mb-6">
                <div class="column card-two is-full-mobile margincardr">
                    <h1 class="pt-5 title">Session Automne 2020</h1>
                    <p class="date-color"><strong style="color:#FFFFFF;">du 6 au 8 novembre 2020</strong></p>
                    <a class="button is-primary mt-6 ivoire" href="http://thpacademielestagedetrail_du_6_au_8_novembre_2020.ikinoa.com/" target="_blank">S'inscrire</a>
                    <a class="button is-primary mt-6 ivoire" href="Session-Automn.php">Programme</a>
                </div>
                <div class="column card-three is-full-mobile margincardl">
                    <h1 class="pt-5 title">Session Printemps 2021</h1>
                    <p class="date-color"><strong style="color:#FFFFFF ;">du 19 au 21 mars 2021</strong></p>
                    <a class="button is-primary mt-6 ivoire" href="http://thpacademielestagedetraildu19au21mars2021.ikinoa.com/" target="_blank">S'inscrire</a>
                    <a class="button is-primary mt-6 ivoire" href="Session-Spring.php">Programme</a>
                </div>
            </div>
        </div>
    </div>
    <div class="column is-full mt-6">
        <h1 class="pt-1 title has-text-centered mt-6">La plus belle des destinations : La Provence</h1>
        <p class="has-text-centered">
        Venez découvrir le Pays de Forcalquier – Montagne de Lure.<br>
Situé au cœur de la Provence, dans le parc naturel régional du Luberon, au pied de la montagne de Lure, vous allez adorer !
        </p>
    </div>

    
    <!-- Maps -->
    <iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDq1G7DlVkMkuf5YdPcltF4jFLdBAJBS9s&amp;q=Forcalquier+&amp;zoom=7" width="100%" height="450"></iframe>

    <?php include("components/footer.php")?>

</body>
</html>