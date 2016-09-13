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
    			$conn = new PDO("mysql:host=$servername;dbname=grocery_store", $username, $password);
   				 // set the PDO error mode to exception
   				 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   				 echo "Connected successfully"; 
   			 }
		catch(PDOException $e)
    	{
   			 echo "Connection failed: " . $e->getMessage();
   		 }
	
	
		
   		 
   		 
		
	
		try {
			$sql = "SELECT * FROM `fresh_prod` WHERE `prod_id` = 1;";
			$statement = $conn->prepare($sql);
			// use exec() because no results are returned
			
			$statement->execute();
			$data = $statement->fetchObject();
			echo $data;
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
