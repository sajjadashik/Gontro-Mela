<?php
require_once('Connection.php');
$bookName = $bookAuthorName = '';

$bookName = $_POST['bookname'];
$bookAuthorName = $_POST['bookauthorname'];

$sql = "INSERT INTO bookreq(BookName,BookAuthorName) VALUES ('$bookName','$bookAuthorName')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: hellow world.php");
}
else
{
	echo "Error :".$sql;
}
?>