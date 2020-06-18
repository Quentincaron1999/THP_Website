<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php")?>
</head>

<body>

    <?php include("components/navbar.php")?>

    <div class="columns principal is-mobile is-multiline has-text-centered mt-6 bg-col">
        <div class="column mt-6">
            <h1 class="mt-6" style="color: #d3c495;">Galerie</h1>
        </div>
    </div>


    <div class="columns is-mobile is-multiline has-text-centered bg-col">
        <div class="column is-half-fullhd is-full-touch">
            <h2 style="color: #d3c495;">Photos</h2>
            <p class="gal-text">Des moments innoubliables</p>
            <img src="assets/img/pic-pic.png" style="border-radius: 0.5em;">
        </div>
        <div class="column is-full-touch">
            <h2 style="color: #d3c495;">Vidéos</h2>
            <p class="gal-text">Pour revoir encore et encore</p>
            <img src="assets/img/pic-vid.png" style="border-radius: 0.5em;">
        </div>
    </div>

    <?php include("components/footer.php")?>

</body>
</html>