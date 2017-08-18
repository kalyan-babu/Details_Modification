<?php

require('connection.php');
session_start();
if(!$link)
{
	header('location:admin_error.php');
}


else
{
$id=$_POST['id'];


$query="DELETE FROM details where id='$id'";

$result=mysqli_query($link,$query);


$result=mysqli_query($link,$query);

if(!$result)
	   
		header('location:admin_database_error.php');

if($result)
{
	header('location:admin_page.php');
}	

else
	echo'sorry unable to ADD the tupple';

}
?>


