<?php include("components/contact-script.php")?>

<!DOCTYPE html>
<html>

<head>
    <?php include("components/header.php")?>
</head>

<body>
    
    <?php include("components/navbar.php")?>

    <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <form action="" class="box">
                        <div class="field">
                                <label for="" class="label">Email</label>
                                <div class="control has-icons-left">
                                    <input type="email" placeholder="bobsmith@gmail.com" class="input" name="email" required>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Prénom</label>
                                <div class="control has-icons-left">
                                    <input type="text" placeholder="Votre prénom" class="input" name="lastname" required>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Nom</label>
                                <div class="control has-icons-left">
                                    <input type="text" placeholder="Votre nom" class="input" name="firstname" required>
                                </div>
                            </div>                           
                            <div class="field">
                                <label for="" class="label" name="message">Votre message</label>
                                <div class="control has-icons-left">
                                    <textarea class="textarea" placeholder="Textarea"></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <button class="button is-success">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("components/footer.php")?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>