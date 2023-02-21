<?php
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Methods: *");
 header("Access-Control-Allow-Headers: x-requested-with, Origin, Methods, Content-Type, Authorization");
 header('content-type: text/html; charset=utf-8');
 header("Referrer-Policy: unsafe-url");
$URL = $_GET["URL"];
function httpPost($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}
echo httpPost($URL, []);
?>