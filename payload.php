<?php
$url = $_POST["webhook_id"];
$data = $_POST["payload"];

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) {
  echo("An error ocurred");
}

var_dump($result);
?>
<html><body><p>You didn't use a POST request, silly!</p></body></html>
