<?php
//Don't set multiple cookies - set one that contains an array (serialized). When you 
//append to the array, read in the existing cookie first, add the data, then overwrite 
//it.

// define the new value to add to the cookie


//$ad_name = 'name of recently viewed';
$uri=$_SERVER['REQUEST_URI'];

// if the cookie exists, read it and unserialize it. If not, create a blank array
if(array_key_exists('recentviews', $_COOKIE)) {
    $cookie = $_COOKIE['recentviews'];
    $cookie = unserialize($cookie);
} else {
    $cookie = array();
}

$cookie[] = $uri; // add the value to the array


$recent_view_size = 5;
if (count($cookie)> $recent_view_size ) {
	array_shift($cookie); //remove first item of the array if item count > 5
}


$s_cookie = serialize($cookie); //serialize


// save the cookie
setcookie('recentviews', $s_cookie, time()+3600);

?>