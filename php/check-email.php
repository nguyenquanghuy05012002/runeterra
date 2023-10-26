<?php
session_start();

require_once('../db/dbhelper.php');
require_once('../utils/utility.php');

$email = $_GET['email'];

$sql = "SELECT * FROM normal_users WHERE email ='$email'";
$result = executeResult($sql);

if ($result == true && count($result) > 0) { //Tồn tại email rồi
    die(json_encode(false));
} else { //Chưa tồn tại email.
    die(json_encode(true));
}