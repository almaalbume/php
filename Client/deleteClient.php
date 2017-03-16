<?php

include_once '../Config/Database.php';
include_once '../Client/Client.php';


$database = new Database();
$db = $database->getConnection();

$client = new Client($db);

$data = json_decode(file_get_contents("php://input"));

$client->id = $data->id;

if ($client->deleteClient()) {
    echo "Eliminado";
} else {
    echo "No se ha podido eliminar";
}