<?php 
include 'connection.php';
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fill_data.css">
<link rel="stylesheet" href="product_tab.css">
<script src="fill_data_script.js"></script>


<title>Add Products to database</title>
</head>
<body>
<div id="top">
<h1>Indian Grocery Store</h1>
<ul id="menu">
  <li><a href="#h">Insert</a></li>
  <li ><a id="active" href="#news">Update</a></li>
  <li><a href="#contact">View</a></li>

 
    <li ><a href="loginform.php">Sign up</a></li>
    <li ><a href="#login">Login</a></li>

 </ul>
</div>

<div id="bottom">
<table class="fill_data">
<tr>
    <th>Table Name :</th>
    <th>Product Name :</th>
    <th>Cost :</th>	
    <th>Cost Unit :</th>
    <th>Category :</th>
    <th>Quantity :</th>	
</tr>

<tr>
<td class="fill_data">
    <select id="table_name" class="fill_data">
  <option value="fresh_prod">Fruits and Vegetables</option>
  <option value="bakery">Bakery</option>
  <option value="freezer">Freezer</option>
  <option value="pantry">Pantry</option>
  <option value="readytomake">Ready to Make</option>
  <option value="snacksanddrinks">Snacks and Drinks</option>
  <option value="beauty">Toiletries, Beauty and Health</option>
  <option value="enterandhome">Entertainment and Home</option>
</select>
</td>

<td class="fill_data"> 
<textarea id="prod_name" class="fill_data"></textarea>
</td>

<td class="fill_data">
<textarea id="cost" class="fill_data"></textarea>
</td>
 
<td class="fill_data">
<select id="cost_unit">
  <option value="KG">KG</option>
  <option value="Litre">Litre</option>
  <option value="gms">gms</option>
  <option value="ea">ea</option>
</select>
</td>

<td class="fill_data">
    <select id="sel1" class="fill_data" onclick="sel()">
    
    </select>
</td>
<td class="fill_data">
<textarea id="quantity" class="fill_data"></textarea>
</td>
</tr>
</table>
<br>
<br>
<br>

<button class="fillbtn" onclick="add()">ADD</button>
<button class="fillbtn" onclick="">DELETE</button>
<button class="fillbtn" onclick="">UPDATE</button>
<button class="fillbtn" onclick="">VIEW</button>
</div>
<script>
function add()
{
	var table_name=document.getElementById("table_name").value;
	var prod_name=document.getElementById("prod_name").value;
	var cost=document.getElementById("cost").value;
	var quan=document.getElementById("quantity").value;
	if (window.XMLHttpRequest)
    {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp = new XMLHttpRequest();
    }
    else
    {
       // code for IE6, IE5
       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() 
    {
       if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
       {
          
          var quantity = xmlhttp.responseText;
       }
    };
   xmlhttp.open("GET","fill_data_ajax_quan.php?q="+table_name+"&w="+prod_name,true);
   xmlhttp.send();	
   if(quantity==0||quantity=='NULL')
   {
		insert();
	}
   else
   {
	   quan=quantity+quan;
	   alert(quan);
		update(quan);
		alert("Table updated");
   }
}
function insert()
{
	var table_name=document.getElementById("table_name").value;
	var prod_name=document.getElementById("prod_name").value;
	var cost=document.getElementById("cost").value;
	var quan=document.getElementById("quantity").value;
	var cost_unit=document.getElementById("cost_unit").value;
	var category=document.getElementById("sel1").value;

	if (window.XMLHttpRequest)
    {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp = new XMLHttpRequest();
    }
    else
    {
       // code for IE6, IE5
       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() 
    {
       if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
       {
          
          var msg = xmlhttp.responseText;
          alert(msg);
       }
    };
   xmlhttp.open("GET","fill_data_ajax_insert.php?q="+table_name+"&r="+prod_name+"&s="+cost+"&t="+cost_unit+"&u="+category+"&v="+quan,true);
   xmlhttp.send();	
		
		
	
}
function update(val)
{
	var table_name=document.getElementById("table_name").value;
	var prod_name=document.getElementById("prod_name").value;
	var cost=document.getElementById("cost").value;
	var quan=document.getElementById("quantity").value;
	var cost_unit=document.getElementById("cost_unit").value;
	var category=document.getElementById("sel1").value;

	if (window.XMLHttpRequest)
    {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp = new XMLHttpRequest();
    }
    else
    {
       // code for IE6, IE5
       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() 
    {
       if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
       {
          
          var msg = xmlhttp.responseText;
          alert(msg);
       }
    };
   xmlhttp.open("GET","fill_data_update_ajax.php?q="+table_name+"&r="+prod_name+"&s="+cost+"&t="+cost_unit+"&u="+category+"&v="+quan,true);
   xmlhttp.send();	
		
}
</script>
</body>
</html>