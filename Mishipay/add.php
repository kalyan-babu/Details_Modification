<?php

require('connection.php');
session_start();
if(!$link)
{
	header('location:admin_error.php');
}


else
{
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pbrand=$_POST['pbrand'];
$pimage=$_POST['pimage'];
$pdescription=$_POST['pdescription'];
$pprice=$_POST['pprice'];
$pcount=$_POST['pcount'];


$query="INSERT INTO details (product_id,product_name,product_brand,product_image,product_description,product_price,product_count)VALUES('$pid','$pname','$pbrand','$pimage','$pdescription','$pprice','$pcount')";

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





