<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="admin_login.css">

<title>Ajax Page for Product Details</title>

</head>
<body>
<?php 
include 'connection.php';
$q = strval($_GET['q']);
echo $q;
$sql="SELECT * FROM admin_login WHERE admin_id='".$q."'";
$query=mysql_query($sql);

while($result=mysql_fetch_array($query))
{
	$pwd=$result['admin_pwd'];
}


$msg = "Your password is :".$pwd;
echo $msg;






?>
</body>
</html>