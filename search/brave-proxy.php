<?php
header('Content-Type: application/json');

$query = urlencode($_GET['q']);
$api_key = 'BRAVE_API_KEY';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.search.brave.com/res/v1/web/search?q=$query");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Accept: application/json",
  "X-Subscription-Token: $api_key"
]);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
