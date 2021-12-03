<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if($_SERVER["REQUEST_METHOD"] !== "POST"){
	http_response_code(404);
	echo "Not Found";
	return;
}

include "../../config/database.php";
include "../../models/users.php";

// instantiate database
$database = new Database();
$db = $database->getConnection();

//instantiate user
$user = new Users($db);

$data = json_decode(file_get_contents("php://input"));

$user->email = $data->username;
$user->password = $data->password;

//call login
$isLog = $user->login();
// $isLogAdmin = $user->login_admin();

if($isLog){
	//201 - created
	http_response_code(201);

	// user array
	$user_arr = array(
		'role' => $user->role
	);

	// make json
	echo json_encode($user_arr);
}
// else if($isLogAdmin){
// 	//201 - created
// 	http_response_code(201);

// 	// user array
// 	$user_arr = array(
// 		'position' => 'admin',
// 		'user_username' => $user->user_username,
// 		'user_password' => $user->user_password
// 	);

// 	// make json
// 	echo json_encode($user_arr);
// }
else{
	//500 - internal server error/ may problema sa db connection
	http_response_code(404);
}
