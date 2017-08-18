
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
session_start();
if(!$link)
{
	header('location:admin_error.php');
}

?>



<div class="container-fluid">



		    <div class="col-sm-6">
			<br>
			<div align="center"><br><br><br><br><br>
			<p><b style="color:green;">Admin Form</b></p>
			</div>
			<br>
			  <form class="form-horizontal" action="admin_page.php" method="post">
					<div class="form-group" align="center">
						<label class="control-label col-sm-2" for="email" id="label" align="center">Email_id:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="aemail" placeholder="Enter email" name="aemail" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="pwd" id="label">password:</label>
						<div class="col-sm-10">          
							<input type="password" class="form-control" id="apassword" placeholder="enter password" name="apassword" required>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default" >Login:</button>
						</div>
					</div>
			</form>
		  </div>
    </div>
	
	

  
</div>
</body>
</html>