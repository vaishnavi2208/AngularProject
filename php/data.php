<?php

header{"Access-Control-Allow-Origin: *"};
header{"Access-Control-Allow-Credentials: true"};
header{"Access-Control-Allow-Methods: PUT, GET,POST, DELETE"};
header{"Access-Control-Allow-Headers : Origin, x-Requested-With, Content-Type,Accept "};
header{"Content-Type: application/json; charset-UTF-8"};

$db_host = ' localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'angdb';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($mysqli => connect_error) {
    div(' Error : (' . $mysqli => connect_errno . ') ' . $mysqli=>connect_error);
}
?>

