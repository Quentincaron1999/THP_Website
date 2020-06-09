<?php

$firstPost = htmlspecialchars($_POST['firstName']);
$lastPost = htmlspecialchars($_POST['lastName']);
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