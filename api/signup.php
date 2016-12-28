<?php
// Login is used to set the back-end session

session_start();
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Credentials: true');
header('Content-type: application/json');

setcookie("auth", 'HTRSHST$T#$EYHDR^D$W', time()+100000, '/');
$_SESSION['valid'] = true;

exit(json_encode(array("valid"=>true, "token"=>'HTRSHST$T#$EYHDR^D$W')));