<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="jquery/jquery.min.js"></script>	
<script src="bootstrap/js/bootstrap.min.js"></script>

<style>
#label
{
	font-weight:bold;
}


.image_description{
	
	 background-color: white;
    width: 400px;
	height:400px;
    margin: 0px;
}

</style>

</head>

<body>


<?php

require('connection.php');
if(!$link)
{
	header('location:user_error.php');
}
session_start();

if (!empty($_POST['email']))
{

$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];

}

else if(empty($_POST['email']))
{

$email=$_SESSION['email'];
$password=$_SESSION['password'];

}


$query1="SELECT count(*) as count FROM users where email='$email' and password='$password'";
$result1=mysqli_query($link,$query1);
if(!$result1)
		header('location:user_database_error.php');
	
while($row=mysqli_fetch_array($result1))
	$c=$row['count'];

if($c==0)
	header('location:no_user_page.php');

$query2="SELECT count(*) as count FROM details";
$result2=mysqli_query($link,$query2);
if(!$result2)
		header('location:user_database_error.php');

	
while($row2=mysqli_fetch_array($result2))
{
	$count=$row2['count'];
}	

	
$query3="SELECT * FROM details";

$result3=mysqli_query($link,$query3);
if(!$result3)
	header('location:user_database_error.php');



?>

<div class="container-fluid">


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mishipay</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
       <li><button type="button" class="btn btn-info btn-lg">HI,<?php echo $email; ?></button></li>
	   <li><a href="user_logout.php"><b>Log out<b></a></li>
    </ul>
  </div>
</nav>
  

  <div class="row">
	<?php
	if($count>0)
	{
		while($row1=mysqli_fetch_array($result3))
		{
			$image=$row1['product_image'];
			$name=$row1['product_image'];
			$id=$row1['id'];
			$price=$row1['product_price'];
			$brand=$row1['product_brand'];
			$product=$row1['product_name'];
			echo '
					<div class="col-sm-3">
					<div class="image_description">
					<div class="a" align="center">
						<b style="color:green;">'.$name.'</b>
					</div><br>
						<img src="images/'.$image.'.jpg" width="200px" length="200px" />
						<br>
						<div align="center">
						<b style="font-size:25px;">$'.$price.'</b><br>
						<b style="color:green;">'.$product.'</b><br>
						<b style="color:red;">'.$brand.'</b>
						
						<form action="order.php" method="post">
						 
						 <input type="hidden" name="id" id="id" value="'.$id.'"><br>
						<button type="submit" class="btn btn-info btn-lg">ORDER</button>
						</form>
						</div>
					</div>
					</div>';
					
					
		}
	}
	else{
		
		
		echo ' 
		 <div algin="center">
		 <br><br><br><br><br><br>
		 <p align="center">SORRY, WE havent found any products</p>
		<p align="center">Pleae <b style="color:green;">VISIT</b> some other time</p>
		</div>';
		
		
		
	}
	?>
</div>  
  
</div>
</body>
</html>