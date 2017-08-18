<?php

require('connection.php');
session_start();
if(!$link)
{
	header('location:user_error.php');
}


else
{
	
$email=$_SESSION['email'];
$id=$_POST['id'];

$query1="SELECT * FROM details where id='$id'";
$result1=mysqli_query($link,$query1);
if(!$result1){
		header('location:user_database_error.php');
}
while($row=mysqli_fetch_array($result1))
{
	$product_id=$row['product_id'];
	$product_brand=$row['product_brand'];
	$product_image=$row['product_image'];
	$product_price=$row['product_price'];
	$product_count=$row['product_count'];
	$product_count=$product_count-1;
}

// modifing the product count

$query2="UPDATE details SET product_count = '$product_count' WHERE id='$id'";

$result2=mysqli_query($link,$query2);

// inserting into orders tables

$query="INSERT INTO orders (email,product_id,product_brand,product_image,product_cost) VALUES('$email','$product_id','$product_brand','$product_image','$product_price')";

$result=mysqli_query($link,$query);

if(!$result)
		//header('location:error.php');
		echo 'cant insert into database';
if($result)
{
	header('location:user_login.php');
}



	
}
	
?>





