<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="login.css">
<script src="login_script.js"></script>
<title>Ajax Page for Product Details</title>

</head>
<body>
<?php 
include 'connection.php';
$q = strval($_GET['q']);
echo $q;
$sql="SELECT * FROM customer_details WHERE email='".$q."'";
$query=mysql_query($sql);

while($result=mysql_fetch_array($query))
{
	$pwd=$result['pwd'];
}


$msg = "Your password is :".$pwd;
echo $msg;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = 'From: np0334@gmail.com' . "\r\n" .
		'Reply-To: np0334@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

// send email
mail($q,"Password for grocery store",$msg,$headers);





?>
</body>
</html>