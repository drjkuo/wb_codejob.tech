<?php

$url = 'http://codejob.tech/testRestful.php?';

$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1); // not to echo
curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json',
    //'Content-Length: ' . strlen($data)
));

$result = curl_exec($cURL);

$json = json_decode($result, true);


foreach ($json as $values) {
	echo $values["fname"]." ".$values["lname"]."<br>";
}

curl_close($cURL);

?>