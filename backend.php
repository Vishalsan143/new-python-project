<?php

$id = $_GET['id'];

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://youtube-mp3-download1.p.rapidapi.com/dl?id=".$id,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 20,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: youtube-mp3-download1.p.rapidapi.com",
		"X-RapidAPI-Key: 719ebf6b9cmsh47e22e9c9ff678ap177be1jsna051965c605e"
	],
]);


$response = curl_exec($curl);

curl_close($curl);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

echo $response;

?>
