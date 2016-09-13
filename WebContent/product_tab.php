<?php 
include 'connection.php';
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="product_tab.css">
<script src="product_tab_script.js"></script>

<title>Our Products</title>
</head>
<body>
<div id="top">
<h1>Indian Grocery Store</h1>
<ul id="menu">
  <li><a href="#home">Home</a></li>
  <li ><a id="active" href="#news">Products</a></li>
  <li><a href="#contact">Contact</a></li>

 
    <li ><a href="loginform.php">Sign up</a></li>
    <li ><a href="#login">Login</a></li>

 </ul>
</div>

<div id="bottom">
<div id="left">
<table>
<tr>
<td>
<div class="dropdown">
  <button id="fruits" class="navbutton" onclick="showUser('fresh_prod','NULL')">Fruits and Vegetables</button>
  
</div>
</td>
</tr>


<tr>
<td>
<div class="dropdown">
<button id="bakery" class="navbutton" onclick="showUser('bakery','NULL')">Bakery</button>
  <div id="bakeryDropdown" class="dropdown-content">

   <button id="bread" class="btn_drop_down" onclick="showUser('bakery','bread')">Bread</button><br>
   <button id="biscuits" class="btn_drop_down" onclick="showUser('bakery','biscuits')">Biscuits</button><br>
    <button id="toast" class="btn_drop_down" onclick="showUser('bakery','toast')">Toast</button><br>
    <button id="baked" class="btn_drop_down" onclick="showUser('bakery','baked')">Baked Snacks and Sweets</button><br>
  </div>
</div>
</td>
</tr>

<tr>
<td>
<div class="dropdown">
<button id="freezer" class="navbutton" onclick="showUser('freezer','NULL')">Freezer</button>
  <div id="freezerDropdown" class="dropdown-content">
    <button id="veggies" class="btn_drop_down" onclick="showUser('freezer','veggies')">Frozen Veggies</button><br>
    <button id="yoghurt" class="btn_drop_down" onclick="showUser('freezer','yoghurt')">Frozen Yoghurt</button><br>
    <button id="icecreams" class="btn_drop_down" onclick="showUser('freezer','icecream')">Ice Tubes</button><br>
    <button id="desert" class="btn_drop_down" onclick="showUser('freezer','desert')">Desert</button>
  </div>
</div>
</td>
</tr>

<tr>
<td>
<div class="dropdown">
<button id="pantry" class="navbutton" onclick="showUser('pantry','NULL')">Pantry</button>
  <div id="pantryDropdown" class="dropdown-content">
    <button id="oil" class="btn_drop_down" onclick="showUser('pantry','oil')">Oil/Ghee</button><br>
    <button id="spices" class="btn_drop_down" onclick="showUser('pantry','spices')">Herbs and Spices</button><br>
    <button id="addons" class="btn_drop_down" onclick="showUser('pantry','addons')">Add Ons</button><br>
    <button id="sauces" class="btn_drop_down" onclick="showUser('pantry','sauces')">Sauces</button><br>
    <button id="masala" class="btn_drop_down" onclick="showUser('pantry','masala')">Masala</button><br>
    <button id="rice" class="btn_drop_down" onclick="showUser('pantry','rice')">Rice</button><br>
    <button id="pickles" class="btn_drop_down" onclick="showUser('pantry','pickles')">Pickles</button><br>
    <button id="pulses" class="btn_drop_down" onclick="showUser('pantry','pulses')">Pulses</button>
  </div>
</div>
</td>
</tr>

<tr>
<td>
<div class="dropdown">
<button id="rte" class="navbutton" onclick="showUser('readytomake','NULL')">Ready to Make</button>
  <div id="rteDropdown" class="dropdown-content">
    <button id="southindian" class="btn_drop_down" onclick="showUser('readytomake','southindian')">South Indian</button><br>
    <button id="punjabi" class="btn_drop_down" onclick="showUser('readytomake','punjabil')">Punjabi</button><br>
    <button id="desert" class="btn_drop_down" onclick="showUser('readytomake','desert')">Desert</button>
  </div>
</div>
</td>
</tr>



<tr>
<td>
<div class="dropdown">
<button id="snacks" class="navbutton" onclick="showUser('snacksanddrinks','NULL')">Snacks and Drinks</button>
  <div id="snacksDropdown" class="dropdown-content">
    <button id="breakfast" class="btn_drop_down" onclick="showUser('snacksanddrinks','breakfast')">Breakfast</button><br>
    <button id="friedproducts" class="btn_drop_down" onclick="showUser('snacksanddrinks','friedproducts')">Fried Products</button><br>
    <button id="drinks" class="btn_drop_down" onclick="showUser('snacksanddrinks','drinks')">Drinks</button><br>
    <button id="nuts" class="btn_drop_down" onclick="showUser('snacksanddrinks','nuts')">Nuts</button>
  </div>
</div>
</td>
</tr>

<tr>
<td>
<div class="dropdown">
<button id="beauty" class="navbutton" onclick="showUser('beauty','NULL')">Toiletries, Beauty and Health</button>
  <div id="beautyDropdown" class="dropdown-content">
    <button id="soap" class="btn_drop_down" onclick="showUser('beauty','soap')">Soap</button><br>
    <button id="ladyproducts" class="btn_drop_down" onclick="showUser('beauty','ladyproducts')">Feminine Health and Beauty</button><br>
    <button id="hair" class="btn_drop_down" onclick="showUser('beauty','hair')">Hair</button><br>
    <button id="bathroom" class="btn_drop_down" onclick="showUser('beauty','bathroom')">Bathroom necessities</button>
  </div>
</div>
</td>
</tr>

<tr>
<td>
<div class="dropdown">
<button id="home" class="navbutton" onclick="showUser('enterandhome','NULL')">Entertainment and Home</button>
  <div id="homeDropdown" class="dropdown-content">
    <button id="temple" class="btn_drop_down" onclick="showUser('enterandhome','temple')">Worship products</button><br>
    <button id="kitchen" class="btn_drop_down" onclick="showUser('enterandhome','kitchen')">Kitchen necessities</button><br>
    <button id="movies" class="btn_drop_down" onclick="showUser('enterandhome','movies')">Bollywood Movies-DVDs</button><br>
    <button id="music" class="btn_drop_down" onclick="showUser('enterandhome','music')">Bollywood Music-DVDs</button>
  </div>
</div>
</td>
</tr>
</table>
<script>

function showUser(str,val) 
{
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
               
                document.getElementById("right").innerHTML = xmlhttp.responseText;
            }
         };
        xmlhttp.open("GET","product_tab_ajax.php?q="+str+"&w="+val,true);
        xmlhttp.send();
       
}
//Get the button, and when the user clicks on it, execute myFunction


/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */


document.getElementById("bakery").onclick = function() {Bakery()};
function Bakery() {
	document.getElementById("bakeryDropdown").classList.toggle("show");
}

document.getElementById("freezer").onclick = function() {Freezer()};
function Freezer() {
    document.getElementById("freezerDropdown").classList.toggle("show");
}

document.getElementById("pantry").onclick = function() {Pantry()};
function Pantry() {
    document.getElementById("pantryDropdown").classList.toggle("show");
}

document.getElementById("rte").onclick = function() {Rte()};
function Rte() {
    document.getElementById("rteDropdown").classList.toggle("show");
}


document.getElementById("snacks").onclick = function() {Snacks()};
function Snacks() {
    document.getElementById("snacksDropdown").classList.toggle("show");
}

document.getElementById("beauty").onclick = function() {Beauty()};
function Beauty() {
    document.getElementById("beautyDropdown").classList.toggle("show");
}


document.getElementById("home").onclick = function() {Home()};
function Home() {
    document.getElementById("homeDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.navbutton')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
</div>


<div id="right">
</div>
<br style="clear:both;"/>
</div>
</body>
</html>