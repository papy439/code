<?php
session_start();
if(isset($_POST['dnhapadmin']))
{
	include "config.php";
	$user= addslashes($_POST['username']); 
	$pass= addslashes($_POST['pass']);
	 if (!$user || !$pass) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $query = mysql_query("SELECT * FROM canboyte WHERE MSCBYT='$user'");
    if (mysql_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $row = mysql_fetch_array($query);
    if ($pass != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    else{
	    $_SESSION['MSCBYT'] = $user;{
	    	$_SESSION['TEN']=$row['TEN'];
	    	$_SESSION['CCCD']=$row['CCCD'];
	    	$_SESSION['CHUCVU']=$row['CHUCVU']; 
	    	$_SESSION['quyen']=$row['quyen'];
	    header('location:html/trangchu.php');  
	    	
		} 
	} 
}
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
			   		<form class="form-horizontal" method="POST" id="login_form" action="index.php?do=login" enctype="multipart/form-data"> 
			    		<fieldset> 
			     		<div class="form-group"> 
			      			<div class="col-md-12"> 
			       				<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input name="username" placeholder="Username" class="form-control" type="text"> 
			       				</div> 
			      			</div> 
			     		</div> 
			     		<div class="form-group"> 
			      			<div class="col-md-12"> 
			       				<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> <input name="pass" placeholder="Password" class="form-control" type="password"> 
			       				</div> 
			      			</div> 
			     		</div> 
			     		<div class="form-group"> 
			      			<div class="col-md-6">  
			       				<input type="submit" name="dnhapadmin" class="btn btn-md btn-danger pull-right" value="Đăng nhập">
			      			</div> 
			      			<div class="col-md-6">  
			       				<a href="forgetpass.php" class="btn btn-md btn-danger pull-right">Quên mật khẩu</a>
			      			</div> 
			     		</div> 
			    		</fieldset> 
			   		</form> 
			  	</div> 
			</div>		
		</div>
</body>
</html>