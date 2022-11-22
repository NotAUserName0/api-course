<?php
$ch = curl_init();

$headers = [
    "Authorization: Bearer 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",
    "Accept: application/vnd.github+json"
];

//curl_setopt($ch, CURLOPT_URL,"https://randomuser.me/api");
//curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

curl_setopt_array($ch,[
    //CURLOPT_URL => "https://api.github.com/repos/NotAUserName0/appClubes/stargazers",
    CURLOPT_URL => "https://api.github.com/user/starred/NotAUserName0/appClubes",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers, //pasa datos por header
    //CURLOPT_HEADER => true //regresa tambien los datos del header
    CURLOPT_USERAGENT => "NotAUserName0", // es otra forma de poner al agente en curl
    CURLOPT_CUSTOMREQUEST => "PUT"  //tipo de solicitud forzado
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); //obtiene informacion en especifico

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";

//CURL POO install : composer require guzzlehttp/guzzle
