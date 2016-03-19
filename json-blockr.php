<?php

    $addresses = file_get_contents("my-btc-addresses.txt");
    $baseurl = "http://btc.blockr.io/api/v1/address/info/";
    $url = $baseurl . $addresses;

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_FAILONERROR, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSLVERSION, 4);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; RaspberryPi Ticker; PHP/' . phpversion() . ')');
    echo curl_exec($curl);
?>