<html>
<body>
<?php 
class sample{
	private $conn;
	private $fname,$lname,$email,$sno,$sname,$sub,$city,$pcode,
	         $mno,$uid;
	
	public function connect()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";

		try {
    			$conn = new PDO("mysql:host=$servername;dbname=form1", $username, $password);
   				 // set the PDO error mode to exception
   				 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   				 echo "Connected successfully"; 
   			 }
		catch(PDOException $e)
    	{
   			 echo "Connection failed: " . $e->getMessage();
   		 }
	
	
		$fname= $_POST["firstname"];
		$lname= $_POST["lastname"];
		$email=$_POST["email"];
		$sno= $_POST["streetno"];
		$sname= $_POST["streetname"];
		$sub= $_POST["suburb"];
		$city= $_POST["city"];
		$pcode=$_POST["postcode"];
		$mno= $_POST["mbno"];
		
		
	
		try {
			$sql = "INSERT INTO `loginform` (`user_id`, `firstname`, `lastname`, `email_id`, `streetno`, `streetname`, `suburb`, `city`, `postcode`, `mobileno`) 
			VALUES (NULL, '$fname', '$lname', '$email', '$sno', '$sname', '$sub', '$city', '$pcode', '$mno')";
			
			// use exec() because no results are returned
			$conn->exec($sql);
			echo "New record created successfully";
	
	
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	
	
	}
	

	
	
}
$obj=new sample();
$obj->connect();



?>
</body>
</html>
