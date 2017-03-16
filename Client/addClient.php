<?php

include_once '../Config/Database.php';
include_once '../Client/Client.php';

$database = new Database();
$db = $database->getConnection();

$client = new Client($db);

$data = json_decode(file_get_contents("php://input"));

$client->firstname = $data->firstname;
$client->lastname = $data->lastname;
$client->birthday = $data->birthday;
$client->gender = $data->gender;

if ($client->createClient()) {
    echo "true";
} else {
    echo "false";
}