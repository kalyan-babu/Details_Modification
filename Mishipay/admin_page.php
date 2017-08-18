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
	
}

</style>

</head>

<body>


<?php

require('connection.php');
if(!$link)
{
	header('location:admin_error.php');
}
session_start();

if (!empty($_POST['aemail']))
{

$_SESSION['aemail']=$_POST['aemail'];
$_SESSION['apassword']=$_POST['apassword'];
$email=$_SESSION['aemail'];
$password=$_SESSION['apassword'];

}

else if(empty($_POST['aemail']))
{

$email=$_SESSION['aemail'];
$password=$_SESSION['apassword'];

}

$query1="SELECT count(*) as count FROM admin where email='$email' and password='$password'";
$result1=mysqli_query($link,$query1);
if(!$result1)
		header('location:admin_database_error.php');
	
while($row=mysqli_fetch_array($result1))
	$c=$row['count'];

if($c==0)
	header('location:no_page.php');

$query2="SELECT count(*) as count FROM details";
$result2=mysqli_query($link,$query2);
if(!$result2)
		header('location:admin_database_error.php');

while($row2=mysqli_fetch_array($result2))
{
	$count=$row2['count'];
}

$query3="SELECT * FROM details";

$result3=mysqli_query($link,$query3);
if(!$result3)
	header('location:admin_database_error.php');



?>

<div class="container-fluid">


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mishipay</a>
    </div>
	 <ul class="nav navbar-nav">
     
      <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Add</button></li>
      
    </ul>
	
    <ul class="nav navbar-nav navbar-right">
       <li><button type="button" class="btn btn-info btn-lg">HI,<?php echo $email; ?></button></li>
	   <li><a href="logout.php"><b>Log out<b></a></li>
    </ul>
  </div>
</nav>
  


  
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD</h4>
        </div>
         <form class="form-horizontal" action="add.php" method="post">
					<div class="form-group">
						<div class="col-sm-10">
							<input type="text" class="form-control" id="pid" placeholder="Enter product_id" name="pid" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="pname" placeholder="enter product_name" name="pname" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="pbrand" placeholder="enter product_brand" name="pbrand" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="pimage" placeholder="enter product_image" name="pimage" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="pdescription" placeholder="enter product_description" name="pdescription" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="pprice" placeholder="enter product_price" name="pprice" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="pcount" placeholder="enter product_count" name="pcount" required>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default" >ADD:</button>
						</div>
					</div>
			</form>
      </div>
      
    </div>
  </div>
  
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
						
						<form action="delete.php" method="post">
						 
						 <input type="hidden" name="id" id="id" value="'.$id.'" hide><br>
						<button type="submit" class="btn btn-info btn-lg">DELETE</button>
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
		<p align="center">Pleae <b style="color:green;">ADD</b> products</p>
		</div>';
		
	}
	?>

</div>  
  <br>
</div>
</body>
</html>