<?php
// Logout

session_start();
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Credentials: true');
header('Content-type: application/json');

setcookie("auth", '', time() - 3600, '/');
unset($_SESSION['valid']);

exit(json_encode(array("valid"=>false)));