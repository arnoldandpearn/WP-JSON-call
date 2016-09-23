<?php

//This snippet to be used on site B

//Get some content
//through a JSON
//request to the site A

$call = 'http://siteA.com/api/get_recent_posts/?post_type=whatever&count=10';
$json = file_get_contents($call); // this WILL do an http request for you
$results = json_decode($json, TRUE);

//Do stuff with $results

?>
