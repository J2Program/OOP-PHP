<?php

require 'FDNS.php';

$ip = "";

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


$fdns = new FDNS();

$status = trim($_POST['status']);
$region = (isset($_POST['region'])) ? trim($_POST['region']) : "";


switch ($status) {
    case 'main':

        if ($region == 'main') {

            $fdns->setIp($ip);
            $fdns->setRegion('Region_1');
            $fdns->saveIpAndRegion();
            $fdns->setStatus(1);
            $fdns->updateStatusByIp();
        }

        break;

    case 'disable':

        $fdns->setIp($ip);
        $fdns->setStatus(0);
        $fdns->updateStatusByIp();

        break;

    case 'sub':

        $fdns->setIp($ip);
        $fdns->setRegion($region);
        $fdns->updateRegion();

        break;

    default:
        # code...
        break;
}