<?php
require_once('Connection.php');
$bName = $authorName = $publisherName = $cvrImg = $details = $category = $pdf = $page = $language = $country = '';

$bName = $_POST['bookname'];
$authorName = $_POST['bookauthorname'];
$publisherName = $_POST['bookpublishername'];
$cvrImg = $_POST['bookimage'];
$details = $_POST['bookdetails'];
$category = $_POST['bookcategoryname'];
$pdf = $_POST['bookpdf'];
$page = $_POST['bookpageno'];
$language = $_POST['booklanguage'];
$country = $_POST['bookcountry'];


$sql = "INSERT INTO book(bName,Author,Publisher,CoverImg,Details,Category,Pdf,Page,Language,Country) VALUES ('$bName','$authorName','$publisherName','$cvrImg','$details','$category','$pdf','$page','$language','$country')";
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