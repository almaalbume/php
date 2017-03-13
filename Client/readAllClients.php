<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../Config/Database.php';
include_once '../Client/Client.php';

$database = new Database();
$db = $database->getConnection();

$client = new Client($db);

$stmt = $client->readAll();

$result = $stmt->fetchAll( PDO::FETCH_ASSOC );

$json = json_encode( $result );

echo $json;