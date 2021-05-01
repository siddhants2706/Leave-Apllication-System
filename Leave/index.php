<?php 
$host="localhost";
$user="root";
$password="";
$db="employee";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='$uname' AND Pass='$password' ";
    
    $result=mysqli_query($con,$sql);
    
    if((mysqli_num_rows($result))==1){
        echo " You Have Successfully Logged in";
		header("location:land.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in for Employees</title>
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="images/Employee2.png"/>
		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit"  value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>

