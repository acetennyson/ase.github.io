<?php
function connect() {
	$con= new mysqli('127.0.0.1','root','','mark5') or die('invalid connection to database');
	return $con;
}


function check($user,$username) {
	$val;
	$conn = connect();
	$word = "SELECT username from ".$user."WHERE username='$username'";
	$check= $conn->query($word);

	if ($check->num_rows > 0) {
		# code...
		$val = true;
	}else{$val = false;}
	return $val;
}



function signup($user,$firstname, $lastname, $username, $email, $password) {
	$conn = connect();
	$check = check($user, $username);
	if ($check==true) {
		# code...
		die('username already taken');
	}else{
		$query="INSERT into ".$user."(firstname,lastname,email,username,password) VALUES ('".$firstname."','".$lastname."','".$email."','".$username."','".$password."')";
		if($success=$conn->query($query)) {
			$_SESSION['success']= "Your Account has been Registered Successfully";
			$quer="INSERT into friends (username) VALUES ('".$username."')";
			$conn->query($quer)or die("Can't Add friends");
			$conn->close();
			header("Location: index.php");
	}else{ die("Unable to register account");}
	}
}



function login($user,$username,$password) {
	$conn = connect();
	$word = "SELECT username, password FROM ".$user." WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$check= $conn->query($word);

	if ($check->num_rows > 0) {
		# code...
		$_SESSION['user'] = $username;
		$_SESSION['success'] = "Loged in succesfully!!";
		$conn->close();
		header("location: profile.php");
	}else{ die("Username and password donot match!!");}
}

?>