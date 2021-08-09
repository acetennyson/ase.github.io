<?php
session_start();
require "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
login('users',$username,$password);