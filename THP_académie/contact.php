<!DOCTYPE html>
<html>

<head>
    <?php include("components/head.php")?>
</head>

<body>
    
<?php include("components/navbar.php")?>

    <div class="login-dark" style="margin-top: -5%;background-image: url(&quot;assets/img/Lure.jpg&quot;);">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="fas fa-running" style="color: #276746;"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Nom"><input class="form-control" type="password" name="password" placeholder="Prénom" style="margin-top: 21px;"></div>
            <h1 style="font-size: 20px;margin-top: 46px;">Votre Question ?</h1><textarea class="form-control" placeholder="Votre texte"></textarea>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Envoyer</button></div>
        </form>
    </div>

    <?php include("components/footer.php")?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>