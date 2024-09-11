<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'crud';

$con = new mysqli($server, $username, $password, $db);

if ($con->connect_error) {
    die('Connection failed');
}
