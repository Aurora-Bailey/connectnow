<?php
/*

*/

// Request
// hello.php?id=654&firstname=qqqqqqq&lastname=asdf&user[zipcode]=123456&user[location]=qwerty

// Allow requests from any domain
header('Access-Control-Allow-Origin: *');

// Change the content type from html to json
header('Content-type: application/json');

// Convert an array (or anyting) into a JSON string
$json_string = json_encode($_REQUEST);

// Output the JSON string
exit($json_string);


// Response
// {"id":"654","firstname":"qqqqqqq","lastname":"asdf","user":{"zipcode":"123456","location":"qwerty"}}