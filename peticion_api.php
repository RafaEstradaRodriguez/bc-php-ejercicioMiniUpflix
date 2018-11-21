<?php
use GuzzleHttp\Client;

require_once 'vendor/autoload.php';
use Peliculas\Peliculas;

$apiUrl = "http://www.omdbapi.com";

$apikey = "f26ad84f";

$client = new Client();
try {
    $res = $client->request('GET', $apiUrl . "?t=Matrix&apikey=$apikey");
}catch (Exception $e) {
    echo("Error de conexion");
}
$peli = json_decode($res->getBody(), true);

$matrix = new Peliculas($peli['Title'], $peli['Plot'], $peli['Poster']);

