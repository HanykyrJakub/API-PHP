<?php
$url = "http://localhost/my-app/Api/";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('accept:application/json', ))

?>