<?php 
include 'connection.php';
$table_name = strval($_GET['q']);
$prod_name = strval($_GET['r']);
$cost=intval($_GET['s']);
$cost_unit=strval($_GET['t']);
$category=strval($_GET['u']);
$quan=intval($_GET['v']);

$sql="UPDATE '".$table_name."' SET 'quantity'= ".$quan." WHERE 'prod_name' = '".$prod_name."'";
$query=mysql_query($sql);
if (mysql_query($query) === TRUE) {
	echo "New record created successfully";
} 
else 
{
	echo "Error: " . $sql;
}
return "Data inserted";
?>