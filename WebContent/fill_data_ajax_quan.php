<?php 
include 'connection.php';
$table_name = strval($_GET['q']);
$prod_name = strval($_GET['w']);
$sql="SELECT 'quantity' FROM '".$table_name."' WHERE 'prod_name'='".$prod_name."'";
$query=mysql_query($sql);
$result = mysql_query($query);

if(mysql_num_rows($result) != 0)
{
	while($result=mysql_fetch_array($query))
	{
		$quantity=$result['quantity'];
		
	}
	return intval($qunatity);
}
else 
{
	return 0;
}

?>