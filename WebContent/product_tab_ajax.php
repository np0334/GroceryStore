<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="product_tab.css">
<script src="product_tab_script.js"></script>
<title>Ajax Page for Product Details</title>

</head>
<body>
<?php 
include 'connection.php';
$q = strval($_GET['q']);
$w = strval($_GET['w']);
if($w=='NULL')
{
	$sql="SELECT * FROM ".$q."";
}
else 
{
	$sql="SELECT * FROM ".$q." WHERE category = '".$w."'";
}
$query=mysql_query($sql);

$p=0;
try {
while($result = mysql_fetch_array($query))
{
	

	$cost[$p]=$result['cost'];
	$cost_unit[$p]=$result['cost_unit'];
	echo"<div class='item'>";
	echo "<label for='Item_name'>".$result['prod_name']."</label><br>";
	echo "<img src='images/".$result['prod_name'].".jpg' alt='item_name' style='width:200px;height:180px;'><br>";
	echo "<label for='product_cost'>$".$cost[$p]." / </label>";
	echo "<label for='costunit'>".$cost_unit[$p]."</label><br>";
	echo '<button id="item_plus" class="itembtn1" onclick="plus(\''.$result['prod_name'].'\')">+</button>';
	echo '<button id="minus" class="itembtn1" onclick="minus(\''.$result['prod_name'].'\')">-</button>';
	echo "<textarea align='center' id='".$result['prod_name']."text'>0</textarea>";
	echo "<button id='".$result['prod_name']."btn' class='itembtn' align='center'>ADD</button>";
	echo "</div>";
	$p=$p+1; 
}
}
catch (Exception $e)
{
	echo $e;
}
?>


</body>
</html>