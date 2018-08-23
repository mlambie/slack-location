<?php

// https://api.slack.com/custom-integrations/legacy-tokens
// defines a $token variable
require('token.php');

// default to Singapore if there's no country code
$country = !empty($_GET['country']) ? $_GET['country'] : 'sg';

$data = array("status_text" => microtime(), "status_emoji" => ":flag-$country:");                                                                    
$profile = urlencode(json_encode($data));

$cmd = "curl https://slack.com/api/users.profile.set --data 'token=$token&profile=$profile'";

`$cmd`;
