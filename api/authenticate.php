<?php
// Authenticate  is used to get the status of the backend session

session_start();
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Credentials: true');
header('Content-type: application/json');

if (isset($_SESSION['valid']) && $_SESSION['valid']) {
    exit(json_encode(array("valid"=>true, "token"=>'HTRSHST$T#$EYHDR^D$W')));
} else {
    exit(json_encode(array("valid"=>false)));
}