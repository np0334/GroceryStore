<?php 
include 'connection.php';

$fname= $_POST["firstname"];
$lname= $_POST["lastname"];
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$sno= $_POST["streetno"];
$sname= $_POST["streetname"];
$sub= $_POST["suburb"];
$city= $_POST["city"];
$pcode=$_POST["postcode"];
$mno= $_POST["mbno"];

$sql = "INSERT INTO `customer_details`(`user_id`, `email`, `pwd`, `fname`, `lname`, `mobile`, `streetno`, `streetname`, `suburb`, `city`, `postcode`) VALUES (NULL, '$email', '$pwd', '$fname', '$lname', '$mno' ,'$sno', '$sname', '$sub', '$city', '$pcode')";
	
// use exec() because no results are returned
if($conn->exec($sql))
{
	echo "New record created successfully";
}
else{
	echo "Record not created";
}
?>