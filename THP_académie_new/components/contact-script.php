<?php

$firstPost = htmlspecialchars($_POST['firstName']);
$lastPost = htmlspecialchars($_POST['lastName']);
$emailPost = htmlspecialchars($_POST['email']);
$messagePost = htmlspecialchars($_POST['message']);
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

    if (!empty($firstPost) && !empty($lastPost) && !empty($emailPost)) {

        if (filter_var($emailPost, FILTER_VALIDATE_EMAIL)) {
            if (empty($messagePost)) {
                $messagePost = 'NULL';
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
                $messagePost,
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
        }
    }

?>