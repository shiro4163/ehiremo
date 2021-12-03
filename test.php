<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if($_SERVER["REQUEST_METHOD"] !== "POST"){
	http_response_code(404);
	echo "Not Found";
	return;
}

include "backend/config/database.php";
include "backend/models/users.php";

// instantiate database
$database = new Database();
$db = $database->getConnection();

//instantiate user
$user = new Users($db);

$data = json_decode(file_get_contents("php://input"));

$user->email = $data->username;
$user->password = $data->password;

$data = array();
$data["isUserExists"] = $user->isUserExists();
$data["isAccountVerified"] = $user->isAccountVerified();

echo json_encode($data);
