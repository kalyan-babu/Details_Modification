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


$id=$_POST['id'];

$query2="SELECT count(*) as count FROM details";
$result2=mysqli_query($link,$query2);
if(!$result2)
		header('location:user_database_error.php');

$query3="SELECT * FROM details where id='$id'";

$result3=mysqli_query($link,$query3);
if(!$result3)
	header('location:user_database_error.php');



?>

<div class="container-fluid">
  
  <div class="row">
	<?php
		while($row1=mysqli_fetch_array($result3))
		{
			$image=$row1['product_image'];
			$name=$row1['product_image'];
			$id=$row1['id'];
			$price=$row1['product_price'];
			$brand=$row1['product_brand'];
			$product=$row1['product_name'];
			echo '
			        <br><br><br><br><br><be><br>
					<div class="col-sm-6">
						<img src="images/'.$image.'.jpg" width="500px" length="500px" />
					</div>';
					
		 if(!isset($_SESSION['email']) || $_SESSION['email'] == '')
		 {
			  echo '
					
  
			  
						<div class="col-sm-3">
							<br><br><br><br><br><br>
							<div class="a" align="center">
								<b style="color:green;">'.$name.'</b>
							</div>
							<br>
							<div align="center">
								<b style="font-size:25px;">$'.$price.'</b>
								<br>
								<b style="color:green;">'.$product.'</b><br>
								<b style="color:red;">'.$brand.'</b>
							</div><br><br><br>
							<p><b>SORRY,WE CAN NOT ORDER THIS!!!!</b></P>
							<P><b>Please, LOGIN into the PAGE</b></p>
							<br><br><br><br><br><br>
							 <div align="center">
								<a href="main_page.php"><b>HOME LINK</b>
							</div>
					</div>';
			 
		 }
		 else{
			 echo '<div class="col-sm-3">
							<br><br><br><br><br><br>
							<div class="a" align="center">
								<b style="color:green;">'.$name.'</b>
							</div>
							<br>
							<div align="center">
								<b style="font-size:25px;">$'.$price.'</b>
								<br>
								<b style="color:green;">'.$product.'</b><br>
								<b style="color:red;">'.$brand.'<b?<br>
								<form action="confirm_order.php" method="post">
									<input type="hidden" name="id" id="id" value="'.$id.'"><br>
									<button type="submit" class="btn btn-info btn-lg">CONFIRM_ORDER</button>
								</form>
							</div>
							<br><br><br><br><br><br>
							<div align="center">
								<a href="user_login.php"><b>HOME LINK</b>
							</div>
					</div>';
		 }
		}
	?>
				
</div>  
  
 
  
  
</div>
</body>
</html>