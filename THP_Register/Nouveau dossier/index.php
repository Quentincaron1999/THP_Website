<?php

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$emailPost = htmlspecialchars($_POST['email']);
$phonePost = htmlspecialchars($_POST['phoneNumber']);
$companyPost = htmlspecialchars($_POST['company']);
$jobPost = htmlspecialchars($_POST['job']);
$resultRegister = '';

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
                $phonePost,
                $companyPost,
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

            while (list($key, $line) = each($lines) and !$line_number) {

                $line_number = (strpos($line, $search) !== FALSE);
             
            }
             
            if(!$line_number){
                fputcsv($datafile, $data, $delimiter, $enclosure);
                fclose($datafile);
                $resultRegister = 'success-register';
            } else {
                $resultRegister = 'error-save';
            }

        } else {
            $registerDate = 'error-mail';
        }
    } else {
        $resultRegister = 'error-fill';
    }

?>







<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>THP Inscription</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Formulaire d'inscription</li>
    <li>Option & Mode de Paiement</li>
    <li>Paiement</li>
    <li>COnfirmation d'inscription</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Formulaire d'inscription</h2>
    <h3 class="fs-subtitle">Inscription</h3>
    
    <input type="text" name="nom" placeholder="Nom" require>
    <input type="text" name="prenom" placeholder="Prenom" require>
    <input type="date" name="naissdate" placeholder="Date de Naissance" require/>
    <select id="input" name="sexe">
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select>
    <!--Catégorie-->
    <!--Nationalité-->
    <input type="email" name="mail" placeholder="Email" require/>
    <input type="email" name="mail" placeholder="Confirm Email" require/>

    <input type="password" name="cpass" placeholder="Confirm Password" />

    <h3 class="fs-subtitle">Autre Information</h3>

    <input type="submit" name="next" class="next action-button submitdata" value="Suivant" />

  </fieldset>
  <fieldset>
    <h2 class="fs-title">Option & Mode de Paiement</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Paiement</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Confirmation d'inscription</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Addresssssss"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>

</body>
</html>
