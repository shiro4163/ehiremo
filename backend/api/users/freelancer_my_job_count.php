<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if($_SERVER["REQUEST_METHOD"] !== "GET"){
	http_response_code(404);
	echo "Not Found";
	return;
}

include "../../config/database.php";
include "../../models/users.php";

$database = new Database();
$db = $database->getConnection();

$users = new Users($db);

session_start();
$users->user_id = $_SESSION['user_id'];
//fetch my job form db
$result_my_users = $users->freelancer_my_job_count();

//total array
$dash_arr = array();

// job count
while($row = $result_my_users->fetch_assoc()){
	$dash_arr['total_freelancer_count'] = $row;
}

// set http status code to - 200 ok
http_response_code(200);
echo json_encode($dash_arr);
