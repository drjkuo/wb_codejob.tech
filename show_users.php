<?php

$url = 'http://www.gamearts.me/getGameartsUsers.php';
$myurl = 'http://www.codejob.tech/testRestful.php';

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

echo "<h2>Users from Gamearts</h2><br>";
foreach ($json as $values) {
	echo $values["firstname"]." ".$values["lastname"]."<br>";
}


curl_setopt($cURL, CURLOPT_URL, $myurl);
curl_setopt($cURL, CURLOPT_HTTPGET, true);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1); // not to echo
curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json',
    //'Content-Length: ' . strlen($data)
));

$result = curl_exec($cURL);

$json = json_decode($result, true);

echo "-------------------------------------------------------- <br>";
echo "<h2>Users in CodeJob</h2><br>";
foreach ($json as $values) {
	echo $values["fname"]." ".$values["lname"]."<br>";
}


curl_close($cURL);

?>