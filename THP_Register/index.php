<?php

$firstPost = htmlspecialchars($_POST['firstName']);
$lastPost = htmlspecialchars($_POST['lastName']);
$emailPost = htmlspecialchars($_POST['email']);
$phonePost = htmlspecialchars($_POST['phoneNumber']);
$companyPost = htmlspecialchars($_POST['company']);
$jobPost = htmlspecialchars($_POST['job']);
$countryCodePost = htmlspecialchars($_POST['countryCode']);
$countryPost = htmlspecialchars($_POST['country']);
$agePost = htmlspecialchars($_POST['age']);
$postcodePost = htmlspecialchars($_POST['Postcode']);

$phoneFinal = '+' . ($countryCodePost . ' ' . $phonePost);
$resultRegister = '';
$countryName = '';

$jsonCode = 'country_code.json';
$jsonData = file_get_contents($jsonCode);
$countryCode = json_decode($jsonData);




function getUserIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

if (!empty($firstPost) && !empty($lastPost) && !empty($emailPost) && !empty($phonePost)) {

    if (filter_var($emailPost, FILTER_VALIDATE_EMAIL)) {
        if (empty($companyPost)) {
            $companyPost = 'NULL';
        }
        if (empty($jobPost)) {
            $jobPost = 'NULL';
        }

        $getDate = getdate();
        $registerDate = $getDate[mday] . '-' . $getDate[month] . '-' . $getDate[year] . ' / ' . ($getDate[hours] + 2) . ':' . $getDate[minutes] . ':' . $getDate[seconds];

        $hostname = getUserIpAddr();

        $data = array(
            $registerDate,
            $firstPost,
            $lastPost,
            $emailPost,
            $phoneFinal,
            $companyPost,
            $countryPost,
            $postcodePost,
            $jobPost,
            $age,
            $hostname
        );

        $filename =  'data.csv';
        $delimiter = ',';
        $enclosure = '"';

        $datafile = fopen($filename, 'ar');

        $search = $hostname;
        $lines = file($filename);
        $linesNumber = false;

        while (list($key, $line) = each($lines) and !$linesNumber) {

            $linesNumber = (strpos($line, $search) !== FALSE);
        }

        if (!$linesNumber) {
            fputcsv($datafile, $data, $delimiter, $enclosure);
            fclose($datafile);
            $resultRegister = 'success-register';
        } else {
            $resultRegister = 'error-save';
            fputcsv($datafile, $data, $delimiter, $enclosure);
            fclose($datafile);
        }
    } else {
        $registerDate = 'error-mail';
        fputcsv($datafile, $data, $delimiter, $enclosure);
        fclose($datafile);
    }
} else {
    $resultRegister = 'error-fill';
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="./favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>THP register</title>



</head>

<body>
    <div class="main">
        <img src="./bg-0.jpg" class="img-back" style="z-index: 1">
        <div class="container mobile-container" style="z-index: 99">
            <h1>THP register</h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="central">
                            <form action="index.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputFirstName">Prenom<sup>*</sup></label>
                                        <input type="text" class="form-control" id="inputFirstName" name="firstName" placeholder="Votre Prenom" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputLastName">Nom<sup>*</sup></label>
                                        <input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="Votre Nom" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail">Email <sup>*</sup></label>
                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Votre email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPhoneNumber">Numero <sup>*</sup></label>
                                        <div class="phoneFields">
                                            <select name="countryCode" class='countryCode'>
                                                <option selected value="1">USA +1</option>
                                                <?php foreach ($countryCode as $data) { ?>
                                                    <option value="<?= $data->Dial ?>"><?= $data->ISO3166_1_Alpha_3 . ' +' . $data->Dial  ?></option>
                                                <?php } ?>
                                            </select>
                                            <input type="tel" class="form-control" id="inputPhoneNumber" name="phoneNumber" placeholder="Votre Numéro" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAdresse">Adresse</label>
                                        <input type="text" class="form-control" id="inputAdresse" name="adresse" placeholder="Adresse">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPostcode">Code Postal</label>
                                        <input type="text" class="form-control" id="inputPostcode" name="Postcode" placeholder="Code Postal">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCountry">Nationalité <sup>*</sup></label>
                                        <input type="text" class="form-control" id="inputCountry" name="country" placeholder="nationalité">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAge">Sexe</label>
                                        <input type="text" class="form-control" id="inputAge" name="age" placeholder="sexe">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCountry">Ville <sup>*</sup></label>
                                        <input type="text" class="form-control" id="inputCountry" name="country" placeholder="ville">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAge">Pays</label>
                                        <input type="text" class="form-control" id="inputAge" name="age" placeholder="pays">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-row">
                            <form action="index.php" method="post">
                                <div class="form-group col-md-6">
                                    <label for="inputCountry">Langue <sup>*</sup></label>
                                    <input type="text" class="form-control" id="inputCountry" name="country" placeholder="fra">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAge">Vous avez une licence</label>
                                    <input type="text" class="form-control" id="inputAge" name="age" placeholder="oui/non">
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCountry">Club <sup>*</sup></label>
                                <input type="text" class="form-control" id="inputCountry" name="country" placeholder="club">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAge">Entreprise</label>
                                <input type="text" class="form-control" id="inputAge" name="age" placeholder="entreprise">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCountry">Taille de Textile <sup>*</sup></label>
                                <input type="text" class="form-control" id="inputCountry" name="country" placeholder="xl">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAge">Contact en cas d'urgence (Nom, prénom)</label>
                                <input type="text" class="form-control" id="inputAge" name="age" placeholder="urgence">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCountry">Contact en cas d'urgence (Tel)* <sup>*</sup></label>
                                <input type="text" class="form-control" id="inputCountry" name="country" placeholder="+33">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAge">Avez-vous déjà participé au THP ?</label>
                                <input type="text" class="form-control" id="inputAge" name="age" placeholder="Oui/non">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCountry">Comment avez-vous connu le THP ? <sup>*</sup></label>
                                <input type="text" class="form-control" id="inputCountry" name="country" placeholder="internet ?">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAge">Avez-vous déjà participé au THP ?</label>
                                <input type="text" class="form-control" id="inputAge" name="age" placeholder="Oui/non">
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-sm">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Votre certificat Médicale</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </form>
                        <button type="submit" class="btn btn-bambou">S'inscrire</button>
                    </div>
                </div>
            </div>
            >
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <?php
    if ($resultRegister == 'success-register') {
        echo "<script type='text/javascript'>
                $(function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'You will be notified',
                        'type': 'success'
                    })
                })
            </script>";
    } else if ($resultRegister == 'error-save') {
        echo "<script type='text/javascript'>
                $(function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'You can\'t be notified twice',
                        'type': 'error'
                    })
                })
            </script>";
    } else if ($resultRegister == 'error-mail') {
        echo "<script type='text/javascript'>
                $(function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Your email is not correct',
                        'type': 'warning'
                    })
                })
            </script>";
    }

    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>


</body>

</html>