<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "classicmodels";
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
		
			die("Connection failed: " . $conn->connect_error);
		
		}
		$sql = "SELECT * from `customers`";
		
	if ($result=mysqli_query($conn,$sql)){

	$rowcount=mysqli_num_rows($result);
	}
	 
	$customerNumber	 			= $_POST['customerNumber'];	
	$customerName				= $_POST['customerName'];
	$contactLastName			= $_POST['contactLastName'];
	$contactFirstName			= $_POST['contactFirstName'];
	$phone						= $_POST['phone'];
	$addressLine1				= $_POST['addressLine1'];
	$addressLine2				= $_POST['addressLine2'];
	$city						= $_POST['city'];
	$state						= $_POST['state'];
	$postalcode					= $_POST['postalcode'];
	$country					= $_POST['country'];
	$salesRepEmployeeNumber		= $_POST['salesRepEmployeeNumber'];
	$creditLimit				= $_POST['creditLimit'];
	
	
			
	
	$sql = "INSERT INTO customers VALUES ('$customerNumber', '$customerName', '$contactLastName', '$contactFirstName','$phone', 
	'$addressLine1', '$addressLine2', '$city', '$state', '$postalcode', '$country', '$salesRepEmployeeNumber', '$creditLimit')";	
	

		if ($conn->query($sql) === TRUE) {
			
			 echo "<script type=\"text/javascript\">window.alert('Registration Complete');
					window.location.href = 'home.html';</script>"; 
			
		} 
		
		else {
		
			echo "<script type=\"text/javascript\">window.alert('Registration Failed, Please Try Again');
					window.location.href = 'newcustomer.html';</script>"; 
			
		}
	$conn->close();
	
?>