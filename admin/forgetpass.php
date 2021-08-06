<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script> 
	<title>Document</title>
</head>
<body style="background-image: url('assets/images/nen.jpg'); background-size: cover;" >

		<div class="container-fluid"> 
			<div class="row-fluid"> 
				<div class="col-md-offset-4 col-md-4" style="background-color:#3f729b;" id="box"> 
			   		<h2>Cán Bộ Y Tế</h2> 
			   		<hr> 
			   		<form class="form-horizontal" method="POST" action="include/sendmail.php"  enctype="multipart/form-data"> 
			    		<fieldset> 
			     		<div class="form-group"> 
			      			<div class="col-md-12"> 
			      				<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="mscbyt" placeholder="MSCBYT" class="form-control" type="text"> 
			       				</div>
			       				<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="gmail" placeholder="Gmail" class="form-control" type="text"> 
			       				</div> 
			      			</div> 
			     		</div> 
			     		<div class="form-group"> 
			      			<div class="col-md-6" style="float: left;">  
			       				<a href="include/sendmail.php"><input type="submit" name="forgetpass" class="btn btn-md btn-danger pull-right" value="Gửi"></a>
			      			</div> 
			      			<div class="col-md-6">  
			       				<a href="index.php" class="btn btn-md btn-danger pull-right"> Đăng nhập</a>
			      			</div> 
			     		</div> 
			    		</fieldset> 
			   		</form> 
			  	</div> 
			</div>		
		</div>
</body>
</html>