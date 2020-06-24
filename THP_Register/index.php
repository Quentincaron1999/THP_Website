<?php

$firstPost = htmlspecialchars($_POST['firstName']);
$lastPost = htmlspecialchars($_POST['lastName']);
$emailPost = htmlspecialchars($_POST['email']);
$phonePost = htmlspecialchars($_POST['phoneNumber']);
$companyPost = htmlspecialchars($_POST['company']);
$jobPost = htmlspecialchars($_POST['job']);
$countryCodePost = htmlspecialchars($_POST['countryCode']);
$countryPost = htmlspecialchars($_POST['country']);

$phoneFinal = '+' . ($countryCodePost .' '. $phonePost);
$resultRegister = '';
$countryName= '';

$jsonCode = 'country_code.json';
$jsonData = file_get_contents($jsonCode);
$countryCode = json_decode($jsonData);

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
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
            $registerDate = $getDate[mday].'-'.$getDate[month].'-'.$getDate[year].' / '.($getDate[hours] + 2).':'.$getDate[minutes].':'.$getDate[seconds];

            $hostname = getUserIpAddr();

            $data = array(
                $registerDate,
                $firstPost,
                $lastPost,
                $emailPost,
                $phoneFinal,
                $companyPost,
                $countryPost,
                $jobPost,
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
             
            if(!$linesNumber){
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
    <title>THP REGISTER</title>



  </head>
  <body>
    <div class="main">
        <img src="./glasses.png"  class="img-back" style="z-index: 1">
        <div class="container mobile-container" style="z-index: 99">
            <h1>THP REGISTER</h1> 
            
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
                                    <?php foreach($countryCode as $data){ ?>
                                    <option value="<?= $data->Dial ?>"><?= $data->ISO3166_1_Alpha_3 .' +'.$data->Dial  ?></option>
                                    <?php } ?>
                                </select>
                                <input type="tel" class="form-control" id="inputPhoneNumber" name="phoneNumber" placeholder="Votre Numéro" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCompany">Lieu</label>
                        <input type="text" class="form-control" id="inputCompany" name="company" placeholder="Lieu">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputJob">Age</label>
                        <input type="text" class="form-control" id="inputJob" name="job" placeholder="Age">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCountry">Nationalité <sup>*</sup></label>
                        <input type="text" class="form-control" id="inputCountry" name="country" placeholder="Lieu">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputJob">Age</label>
                        <input type="text" class="form-control" id="inputJob" name="job" placeholder="Age">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-bambou">S'inscrire</button>
                </form>
            </div>
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
    } else if($resultRegister == 'error-save') {
        echo "<script type='text/javascript'>
                $(function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'You can\'t be notified twice',
                        'type': 'error'
                    })
                })
            </script>";
    } else if($resultRegister == 'error-mail') {
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
    /*else if($resultRegister == 'error-fill') {
        echo "<script type='text/javascript'>
                $(function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'They are empty field',
                        'type': 'warning'
                    })
                })
            </script>";
    }*/
    
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script language="Javascript">
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    let countDown = new Date('Jun 30, 2020 08:00:00').getTime(),
        x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

            document.getElementById('days').innerText = Math.floor(distance / (day)),
            document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
        }, second)
    </script>
    
    
  </body>
</html>