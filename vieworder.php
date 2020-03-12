<!DOCTYPE html>

<html class=" js no-touch" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your page description here">
    <meta name="author" content="">
    <link href="css/test.css" rel="stylesheet">
</head>

<body>

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
       $result = $conn->query($sql); 

?> 	
	<br> <br> <br> <br> <br> <br> <br>
   <center>
   <div class="table-users">
   <div class="header"><font size=5> Customers </font></div>
   <table cellspacing="0">
   <br>
	   
       <table cellpadding="10"> <tr> <thead>
       
		  <th>CNo. </th>
       	  <th>CName </th>
       	  <th>ConLName </th>
       	  <th>ConFName </th>
		  <th>Phone </th>
       	  <th>Addr1 </th>
		  <th>Addr2 </th>
       	  <th>City </th>
		  <th>State </th>
		  <th>PosCode </th>
		  <th>Country </th>
		  <th>SalesRepNo. </th>
		  <th>CredLim </th>
       	 
       </thead> </tr>


<?php

		if ($result->num_rows > 0) {
			//
        while($row = $result->fetch_assoc()) { 
		
?>			
            <tr>
			<td><?php echo $row['customerNumber'] ?> </td>	
            <td><?php echo $row['customerName'] ?> </td>	
            <td><?php echo $row['contactLastName'] ?> </td>	
            <td><?php echo $row['contactFirstName'] ?> </td>
            <td><?php echo $row['phone'] ?> </td>	
			<td><?php echo $row['addressLine1'] ?> </td>
			<td><?php echo $row['addressLine2'] ?> </td>
			<td><?php echo $row['city'] ?> </td>
			<td><?php echo $row['state'] ?> </td>
			<td><?php echo $row['postalCode'] ?> </td>
			<td><?php echo $row['country'] ?> </td>
			<td><?php echo $row['salesRepEmployeeNumber'] ?> </td>
			<td><?php echo $row['creditLimit'] ?> </td>
            </tr>	
			
					
<?php 
        }
		
  	    }else echo "<script type=\"text/javascript\">window.alert('Data Base Empty');
					window.location.href = '/lab01/Welcome.html';</script>"; ; 
        $conn->close(); 
    
?>
		 <table> <center> <td> 
			
		</center>
    </form>
			
		</td> </center>

			
<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "classicmodels";

	   
       $conn = new mysqli($servername, $username, $password, $dbname);
      
       if ($conn->connect_error) {
		   
         die("Connection failed: " . $conn->connect_error);
		 
       } 
	   
       $sql = "SELECT * from employees";
       $result = $conn->query($sql); 

?> 	
	<br> <br> <br> <br> <br> <br> <br>
   <center>
   <div class="table-users">
   <div class="header"><font size=5> Employees </font></div>
   <table cellspacing="0">
   <br>
	   
       <table cellpadding="10"> <tr> <thead>
       
		  <th>EmpNo.</th>
		  <th>LName</th>
		  <th>FName</th>
		  <th>Ext</th>
		  <th>Email</th>
		  <th>OffCode</th>
		  <th>RepTo</th>
		  <th>JobTit</th>
		  
       </thead> </tr>

<?php

		if ($result->num_rows > 0) {
			//
        while($row = $result->fetch_assoc()) { 
		
?>			
            <tr>
			<td ><?php echo $row['employeeNumber'] ?></td> 
			<td><?php echo $row['lastName'] ?></td>
			<td><?php echo $row['firstName'] ?></td>
			<td><?php echo $row['extension'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['officeCode'] ?></td>
			<td><?php echo $row['reportsTo'] ?></td>
			<td><?php echo $row['jobTitle'] ?></td>
            </tr>	 
			
			
<?php 
        }
		
  	    }else echo "<script type=\"text/javascript\">window.alert('Data Base Empty');
					window.location.href = '/lab01/Welcome.html';</script>"; ; 
        $conn->close(); 
    
?>
		 <table> <center> <td> 
			
		</center>
    </form>
			
		</td> </center>

	
		
	
<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "classicmodels";

	   
       $conn = new mysqli($servername, $username, $password, $dbname);
      
       if ($conn->connect_error) {
		   
         die("Connection failed: " . $conn->connect_error);
		 
       } 
	   
       $sql = "SELECT * from offices";
       $result = $conn->query($sql); 

?> 	
	<br> <br> <br> <br> <br> <br> <br>
   <center>
   <div class="table-users">
   <div class="header"><font size=5> Offices </font></div>
   <table cellspacing="0">
   <br>
	   
       <table cellpadding="10"> <tr> <thead>
       
		  <th>Office Code</th>
		  <th>City</th>
		  <th>Phone</th>
		  <th>Address Line 1</th>
		  <th>Address Line 2</th>
		  <th>State</th>
		  <th>Country</th>
		  <th>Postal Code</th>
		  <th>Territory</th>
       	 
       </thead> </tr>

<?php

		if ($result->num_rows > 0) {
			//
        while($row = $result->fetch_assoc()) { 
		
?>			
            <tr>
			<td ><?php echo $row['officeCode'] ?></td> 
			<td><?php echo $row['city'] ?></td>
			<td><?php echo $row['phone'] ?></td>
			<td><?php echo $row['addressLine1'] ?></td>
			<td><?php echo $row['addressLine2'] ?></td>
			<td><?php echo $row['state'] ?></td>
			<td><?php echo $row['country'] ?></td>
			<td><?php echo $row['postalCode'] ?></td>
			<td><?php echo $row['territory'] ?></td>
            </tr>	 
			
			
<?php 
        }
		
  	    }else echo "<script type=\"text/javascript\">window.alert('Data Base Empty');
					window.location.href = '/lab01/Welcome.html';</script>"; ; 
        $conn->close(); 
    
?>
		 <table> <center> <td> 
			
		</center>
    </form>
			
		</td> </center>

	

	
</body>
</html>
