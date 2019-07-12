<?php 
if(isset($_POST['submit'])){
   $uname = $_POST['name'];
   $uplace = $_POST['place'];
   $ustate = $_POST['state'];
   $umobile = $_POST['mobile'];
   $umail = $_POST['mail'];
   $upid=$_POST['pid'];
   $ups = $_POST['ps'];
   $conn = mysqli_connect("localhost","id5097464_ananth","ananth1");
if($conn->connect_error){
	 die( "Unable to select database". $connect_error);
}
mysqli_select_db($conn,"id5097464_mydb");
  
    $query = "INSERT INTO user(name,place,state,mobile,mail,pid,ps) VALUES ('$uname', '$uplace','$ustate','$umobile','$umail','$upid','$ups')";
    $result = mysqli_query($conn, $query);
    if(!$result){
    die('query is failed' . mysqli_connect_error());
    }
	if($result){
		       $message="your problem is submitted please wait for the solution";
		       echo"<script type='text/javascript'>alert('$message');</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/png" href="userimg.png">
<img src="problemm.png" alt="type of problem" width="500" height="600" align="right">
<body 
    <meta charset="UTF-8">
    <title>Share Your Problem </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="col-xs-6">
             <form action="user.php" method="post">
                 <div class="form-group">
                    <label for="name">name</label>
                     <input type="text"  name="name"class="form-control">
                 </div>
                  <div class="form-group">
                    <label for="place">Place</label>
                     <input type="text" name="place" class="form-control">
                 </div>
                  <div class="form-group">
                    <label for="state">state</label>
                     <input type="text" name="state" class="form-control">
                 </div>
 
                 <div class="form-group">
                    <label for="mobile">mobile</label>
                     <input type="text" name="mobile" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="mail">mail</label>
                     <input type="text" name="mail" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="pid">problem-id(select type of problem from the image and enter the number)</label>
                     <input type="text" name="pid" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="ps">problem statement(explain your problem)</label>
                     <input type="textarea" name="ps" class="form-control">
                 </div>				 <input class="btn btn-primary" type="submit" name="submit" value="Submit">
             </form>
        </div>
    </div>
</body>
</html>