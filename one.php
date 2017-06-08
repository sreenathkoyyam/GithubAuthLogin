<?php

$client_id = 'f9385cc1d402295b7d76';
$redirect_url = 'www.google.com';
//perform post request now
$post = http_build_query(array(
    'client_id' => $client_id ,
    'redirect_uri' => $redirect_url ,
    'client_secret' => 'a32eea212633951e0948aed6bf7d1d7d01c35384',
    'code' => $code ,
));

$context = stream_context_create(array("http" => array(
    "method" => "POST",
    "header" => "Content-Type: application/x-www-form-urlencodedrn" .
                "Content-Length: ". strlen($post) . "rn".
                "Accept: application/json" ,
    "content" => $post,
)));

echo "string";
$json_data = file_get_contents("https://github.com/login/oauth/access_token", false, $context);
print_r($json_data);
$r = json_decode($json_data , true);

 ?>
