<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
<link href="login.css" rel="stylesheet">

</head>
<body id="demo">


<form id="form_format" action="login.php" method="post">
<h1>Login Form</h1>
  <label for="uname">Email id :</label><br>
  <input type="text" id="uname" name="uname" required><br>
  <label for="pwd">Password :</label><br>
  <input type="password" id="pwd" name="lname" required><br>
  <button id="forgot_pwd" onclick='forgotpwd()'>Forgot Password?</button><br>
  <input type="submit" value="Submit" onclick="msg()">
  <input type="button" value="Cancel">
  
</form>




<!-- /form -->
<script>
function msg()
{
	
	var uname=document.getElementById("uname").value;
	var pwd=document.getElementById("pwd").value;
	
	if(uname==""||pwd=="")
	{
		alert("Please fill all the fields.");
	}
	else
	{
		<?php 
		$sql="SELECT * FROM customer_details";
		$query=mysql_query($sql);
		
		$p=0;
		
		while($result = mysql_fetch_array($query))
		{
			
		?>	
			if(uname=="<?php echo $result['email'];?>")
			{
				if(pwd=="<?php echo $result['pwd'];?>")
				{
					alert("Welcome!!");
					return;
				}
				else
				{
					alert("Enter valid Password");
					return;
				}
			}
			alert("User exists!!");
			<?php 
			$p=$p+1;
		}?>
		alert("User does not exist!!!");
	}
}
function forgotpwd()
{

	var email=prompt("Enter your email id :", "");
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
          
           document.getElementById("demo").innerHTML = xmlhttp.responseText;
       }
    };
   xmlhttp.open("GET","login_ajax.php?q="+email,true);
   xmlhttp.send();	
}
</script>
</body>
</html>