<?php
$ch = curl_init();

$headers = [
    "Authorization: Client-ID 7r06Y5mNPA32P0p-jvRIXr7dKhs3U"
];

//curl_setopt($ch, CURLOPT_URL,"https://randomuser.me/api");
//curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

curl_setopt_array($ch,[
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => $headers
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";