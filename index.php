<?php

// https://api.slack.com/custom-integrations/legacy-tokens
// defines a $token variable
require('token.php');

// default to Singapore if there's no country code
$country = !empty($_GET['country']) ? $_GET['country'] : 'sg';

$url 		 = 'https://slack.com/api/users.profile.set';
$status  = microtime();
$emoji 	 = ":flag-$country:";
$profile = urlencode(json_encode(array("status_text" => $status, "status_emoji" => $emoji)));
$payload = "token=$token&profile=$profile";

$c = curl_init($url);
curl_setopt($c, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true); // capture the response instead of echoing it
curl_setopt($c, CURLOPT_POSTFIELDS, $payload);

// capture the response (RETURNTRANSFER)
$result = curl_exec($c);
