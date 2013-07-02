<?php
$username = $_GET('username');
$password = $_GET('password');


if($username === ""){
session_register($username);
session_register($password); 
echo("cool");
header("location:login_success.php");
}

else {
echo "Wrong Username or Password";
}
?>