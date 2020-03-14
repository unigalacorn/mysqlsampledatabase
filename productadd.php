<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "classicmodels";
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
		
			die("Connection failed: " . $conn->connect_error);
		
		}
		$sql = "SELECT * from `products`";
		
	if ($result=mysqli_query($conn,$sql)){

	$rowcount=mysqli_num_rows($result);
	}
	 
	$productCode	 			= $_POST['productCode'];	
	$productName				= $_POST['productName'];
	$productLine				= $_POST['productLine'];
	$productScale				= $_POST['productScale'];
	$productVendor				= $_POST['productVendor'];
	$productDescription			= $_POST['productDescription'];
	$quantityInStock			= $_POST['quantityInStock'];
	$buyPrice					= $_POST['buyPrice'];
	$MSRP						= $_POST['MSRP'];
	
			
	
	$sql = "INSERT INTO products VALUES ('$productCode', '$productName', '$productLine', '$productScale','$productVendor', 
	'$productDescription', '$quantityInStock', '$buyPrice', '$MSRP')";	
	

		if ($conn->query($sql) === TRUE) {
			
			 echo "<script type=\"text/javascript\">window.alert('Registration Complete');
					window.location.href = 'home.html';</script>"; 
			
		} 
		
		else {
		
			echo "<script type=\"text/javascript\">window.alert('Registration Failed, Please Try Again');
					window.location.href = 'newproduct.html';</script>"; 
			
		}
	$conn->close();
	
?>