<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
<link href="formscript.css" rel="stylesheet">
</head>
<body>

<form method="post" action="form1.php">

<label for="first name">First Name :</label><br>


<input type="text" name="firstname"><br>


<label for="last name" >Last Name :</label><br>

<input type="text" name="lastname"><br>



<label for="Email" >Email id :</label><br>

<input type="text" name="email" id="mail"><br>


<label for="password" >Password :</label><br>

<input type="text" name="pwd"><br>



<label for="street no" >Street No. :</label><br>

<input type="text" name="streetno"><br>


<label for="street name" >Street Name :</label><br>

<input type="text" name="streetname"><br>

<label for="suburb"> Suburb :</label><br>

<input type="text" name="suburb"><br>

<label for="city">City :</label><br>

<input type="text" name="city"><br>

<label for="post code"> Post Code :</label><br>

<input type="number" name="postcode"><br>

<label for="mbno">Mobile No.:</label><br>

<input type="tel" name="mbno">
<br><br>



<input type="submit" value="Submit" onclick="check_email()">

<input type="button" value="Cancel">

</form>
<script>
function check_email()
{

	var email=document.getElementById("mail").value;
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
          
           var x = xmlhttp.responseText;
       }
    };
   xmlhttp.open("GET","login_ajax.php?q="+email,true);
   xmlhttp.send();	
   if (x==1)
   {
		alert("email id already exists.");
   }
   else
   {
		
	}
   
}
</script>
</body>
</html>