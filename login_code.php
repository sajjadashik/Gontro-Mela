<?php
require_once('Connection.php');
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$hasError = false;
$err_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST["uname"])) 
	{
		$err_uname = "Username Required";
		$hasError = true;
	} 
	else 
	{
		$uname = htmlspecialchars($_POST["uname"]);
	}
	if (empty($_POST["pass"])) 
	{
		$err_pass = "Password Required";
		$hassError = true;
	} 
	else 
	{
		$pass = htmlspecialchars($_POST["pass"]);
	}
    if (!$hasError) 
	{
		$sql = "SELECT * FROM registration WHERE Username = '$uname' AND Password ='$pass'";
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
			$err_message = "Invalid usgername or password";
		}
	}
}
?>