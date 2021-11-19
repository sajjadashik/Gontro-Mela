<?php
require_once('Connection.php');
$name = $uName = $pass = $cPass = $gender = $email = $phone = $address = '';

$name = $_POST['name'];
$uName = $_POST['uname'];
$pass = $_POST['password'];
$cPass = $_POST['cpassword'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phonenumber'];
$address = $_POST['address'];


$sql = "INSERT INTO registration(Name,Username,Password,cPassword,Gender,Email,Phone,Address) VALUES ('$name','$uName','$pass','$cPass','$gender','$email','$phone','$address')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>