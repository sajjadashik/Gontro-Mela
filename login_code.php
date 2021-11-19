<?php
require_once('Connection.php');
$uName = $pass = '';

$uName = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM registration WHERE Username = '$uName' AND Password ='$pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["Email"];
	}
	header("Location: hellow world.php");
}
else
{
	echo "Invalid email or password";
}
?>