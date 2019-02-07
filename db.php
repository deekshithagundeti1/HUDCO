<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hudco";

// Create conection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check conection
if (!$con) {
    die("conection failed: " . mysqli_conect_error());
}
if(isset($_POST['submit']))
{ 
    //Member variables from HTML
    $name = $_POST['name'];
	$emailid = $_POST['email'];
	$password = $_POST['pass'];
    $sql = "INSERT INTO registration(name,emailid,password)
			VALUES ('$name','$emailid','$password')";
    if (mysqli_query($con, $sql)) {
	     echo "Registered successfully";
		header('location:admin.html');
    } 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    } 
}
if(isset($_POST['login']))
{
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$query = "SELECT * FROM registration WHERE emailid='$email' AND password='$password'";
		$retval = mysqli_query($con,$query);
		if(mysqli_num_rows($retval) == 1){
			header('location:admin.html');
		    exit();
		}
		else{
			echo "Invalid login!";
			exit();
		}
		
}
mysqli_close($con);
?>