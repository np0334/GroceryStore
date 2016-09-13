<?php 
include 'connection.php';

$q = strval($_GET['q']);
echo $q;
$sql="SELECT * FROM customer_details WHERE email='".$q."'";
$query=mysql_query($sql);

while($result=mysql_fetch_array($query))
{
	$email=$result['email'];
	if($email==$q)
	{
		return 1;
	}
}
return 0;

?>