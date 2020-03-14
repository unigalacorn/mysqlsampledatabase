<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "classicmodels";
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
		
			die("Connection failed: " . $conn->connect_error);
		
		}
		$sql="SELECT * FROM `employees`";
		
	if ($result=mysqli_query($conn,$sql)){

	$rowcount=mysqli_num_rows($result);
	}
	 
	$employeeNumber	 = $_POST['employeeNumber'];	
	$lastName	= $_POST['lastName'];
	$firstName	= $_POST['firstName'];
	$extension	= $_POST['extension'];
	$email		= $_POST['email'];
	$officeCode	= $_POST['officeCode'];
	$reportsTo	= $_POST['reportsTo'];
	$jobTitle	= $_POST['jobTitle'];
	
	$sql = "INSERT INTO employees VALUES ('$employeeNumber', '$lastName', '$firstName', '$extension', '$email', '$officeCode' , '$reportsTo', '$jobTitle')";	
	
		if ($conn->query($sql) === TRUE) {
			
			 echo "<script type=\"text/javascript\">window.alert('Registration Complete');
					window.location.href = home.html';</script>"; 
			
		} 
		
		else {
		
			echo "<script type=\"text/javascript\">window.alert('Registration Failed, Please Try Again');
					window.location.href = 'newemployee.html';</script>"; 
			
		}
	$conn->close();
	
?>