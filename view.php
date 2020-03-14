<!DOCTYPE html>

<html>
<body>

<a href="home.html">Home Page</a> <br>

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

<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "classicmodels";

	   
       $conn = new mysqli($servername, $username, $password, $dbname);
      
       if ($conn->connect_error) {
		   
         die("Connection failed: " . $conn->connect_error);
		 
       } 
	   
       $sql = "SELECT * from orderdetails";
       $result = $conn->query($sql); 

?> 

<br> <br> 
   <center>
   <div class="table-users">
   <div class="header"><font size=5> Order Details </font></div>
   <table cellspacing="10">
   <br>
	   
       <table cellpadding="10"> <tr> <thead>
       
		  <th>Order No.</th>
		  <th>Product Code</th>
		  <th>Quantity</th>
		  <th>Price Each</th>
		  <th>Order Line No.</th>
       	 
       </thead> </tr>

<?php

		if ($result->num_rows > 0) {
			//
        while($row = $result->fetch_assoc()) { 
		
?>			
            <tr>
			<td ><?php echo $row['orderNumber'] ?></td> 
			<td><?php echo $row['productCode'] ?></td>
			<td><?php echo $row['quantityOrdered'] ?></td>
			<td><?php echo $row['priceEach'] ?></td>
			<td><?php echo $row['orderLineNumber'] ?></td>
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
	   
       $sql = "SELECT * from productlines";
       $result = $conn->query($sql); 

?> 

<br> <br> 
   <center>
   <div class="table-users">
   <div class="header"><font size=5> Product Lines </font></div>
   <table cellspacing="10">
   <br>
	   
       <table cellpadding="10"> <tr> <thead>
       
		  <th>Product Line</th>
		  <th>Text Desc</th>
		  <th>HTML Desc</th>
		  <th>Image</th>
       	 
       </thead> </tr>

<?php

		if ($result->num_rows > 0) {
			//
        while($row = $result->fetch_assoc()) { 
		
?>			
            <tr>
			<td ><?php echo $row['productLine'] ?></td> 
			<td><?php echo $row['textDescription'] ?></td>
			<td><?php echo $row['htmlDescription'] ?></td>
			<td><?php echo $row['image'] ?></td>
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
			
		</td> </center>	<br><br>	

	
		
<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "classicmodels";

	   
       $conn = new mysqli($servername, $username, $password, $dbname);
      
       if ($conn->connect_error) {
		   
         die("Connection failed: " . $conn->connect_error);
		 
       } 
	   
       $sql = "SELECT * from `orders`";
       $result = $conn->query($sql); 

?> 	
	<br> <br> <br> <br> <br> <br> <br>
   <center>
   <div class="table-users">
   <div class="header"><font size=5> Orders </font></div>
   <table cellspacing="0">
   <br>
	   
       <table cellpadding="10"> <tr> <thead>
       
		  <th>Order Number</th>
       	  <th>Order Date</th>
       	  <th>Required Date</th>
       	  <th>Shipped Date</th>
		  <th>Status</th>
       	  <th>Comments</th>
		  <th>Customer Number</th>
       	
       	 
       </thead> </tr>


<?php

		if ($result->num_rows > 0) {
			//
        while($row = $result->fetch_assoc()) { 
		
?>
            <tr>
			<td><?php echo $row['orderNumber'] ?> </td>	
            <td><?php echo $row['orderDate'] ?> </td>	
            <td><?php echo $row['requiredDate'] ?> </td>	
            <td><?php echo $row['shippedDate'] ?> </td>
            <td><?php echo $row['status'] ?> </td>	
			<td><center><?php echo $row['comments'] ?></center> </td>
			<td><?php echo $row['customerNumber'] ?> </td>
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
	   
       $sql = "SELECT * from `payments`";
       $result = $conn->query($sql); 

?> 	
	<br> <br> <br> <br> <br> <br> <br>
   <center>
   <div class="table-users">
   <div class="header"><font size=5> Payments </font></div>
   <table cellspacing="0">
   <br>
	   
       <table cellpadding="10"> <tr> <thead>
       
		  <th>Customer Number</th>
       	  <th>Check Number</th>
       	  <th>Payment Date</th>
       	  <th>Amount</th>
       	
       	 
       </thead> </tr>


<?php

		if ($result->num_rows > 0) {
			//
        while($row = $result->fetch_assoc()) { 
		
?>
            <tr>
			<td><?php echo $row['customerNumber'] ?> </td>	
            <td><?php echo $row['checkNumber'] ?> </td>	
            <td><?php echo $row['paymentDate'] ?> </td>	
            <td><?php echo $row['amount'] ?> </td>
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
	   
       $sql = "SELECT * from `products`";
       $result = $conn->query($sql); 

?> 	
	<br> <br> <br> <br> <br> <br> <br>
   <center>
   <div class="table-users">
   <div class="header"><font size=5> Products </font></div>
   <table cellspacing="0">
   <br>
	   
       <table cellpadding="10"> <tr> <thead>
       
		  <th>Product Code</th>
       	  <th>Product Name</th>
       	  <th>Product Line</th>
       	  <th>Product Scale</th>
		  <th>Product Vendor</th>
       	  <th>Product Description</th>
		  <th>Quantity in Stock</th>
		  <th>Buy Price</th>
       	  <th>MSRP</th>
       	
       	 
       </thead> </tr>


<?php

		if ($result->num_rows > 0) {
			//
        while($row = $result->fetch_assoc()) { 
		
?>
            <tr>
			<td><?php echo $row['productCode'] ?> </td>	
            <td><?php echo $row['productName'] ?> </td>	
            <td><?php echo $row['productLine'] ?> </td>	
            <td><?php echo $row['productScale'] ?> </td>
            <td><?php echo $row['productVendor'] ?> </td>	
			<td><?php echo $row['productDescription'] ?> </td>
			<td><?php echo $row['quantityInStock'] ?> </td>
			<td><?php echo $row['buyPrice'] ?> </td>
			<td><?php echo $row['MSRP'] ?> </td>
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
