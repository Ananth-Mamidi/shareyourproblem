<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="admin.png">
	<title>admin Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="robo.jpg">
<?php
$conn = mysqli_connect("localhost","id5097464_ananth","ananth1");
if($conn->connect_error){
	 die( "Unable to select database". $connect_error);
}
mysqli_select_db($conn,"id5097464_mydb");
  
  $passshort=$passfail=' ';
  if(isset($_POST['login']))
  {
	$username=$_POST['username'];
  	$password=$_POST['password'];
  	$aadcheck="SELECT * FROM admin WHERE username='$username' AND password='$password' ";
  	$result=$conn->query($aadcheck);
  	$logyes=$result->num_rows;
  	if($logyes == 1)
  	{
  		$row=mysqli_fetch_array($result);
  		{
  			$_SESSION['password']=$row['password'];
  			$_SESSION['username']=$row['username'];
  		}
  		echo("<script>location.href ='adminextract.php';</script>");
  	}
  	else
  	{
  		echo '<script type="text/javascript">alert("Invalid credentials");</script>';
  	}
  }
 ?>
<div class="form-group" style="width: 30%; margin: 0 auto; padding-top: 100px;">
		<form method="post" action="adminlogin.php"><br><br><br><br><br><br><br>
		<img src="adminicon.png" alt="type of problem" width="100" height="100" align="middle"><br>
		<label class="control-label col-sm-2"><b>LOGIN</b></label>
		<input type="text" name="username" id="username" class="form-control" placeholder="admin name"><br>
		<input type="password" name="password" id="password" class="form-control" placeholder="Enter password"><br>
<button style="width: 20%; margin: 0 auto;" class="btn btn-primary" type="submit" name="login">Login</button>
 <input type="button" style="width: 20%; margin: 0 auto;" class="btn btn-primary" value="Home"  onclick="location='/'" />
</form>
<br><br>
<!--  <span><?php //echo $showlog;?></span>   -->
</div>
</body>
</html>