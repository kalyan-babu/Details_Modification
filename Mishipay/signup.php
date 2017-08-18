<?php

require('connection.php');
session_start();
if(!$link)
{
	header('location:user_error.php');
}


else
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];



$query="INSERT INTO users (name,email,password)VALUES('$name','$email','$password')";

$result=mysqli_query($link,$query);

if(!$result)
		header('location:user_database_error.php');

if($result)
{
	header('location:login_success.php');
}	

else
	echo'sorry unable to ADD the tupple';

}
?>





