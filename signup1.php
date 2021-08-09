<?php
session_start();
require "connect.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
signup('users',$firstname, $lastname, $username, $email, $password);
?>