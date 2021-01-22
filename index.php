<?php

	echo phpversion();
	echo "<hr>";
	echo $_SERVER['SERVER_NAME'];
	

 
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "example";
 $db = "test";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 
 

 
 $query="SELECT * FROM Cars";
 $result=mysql_query($conn,$query);
 
	if(mysqli_num_rows($result)>0){
		
		while($row=msqli_fetch_assoc($result)){
			echo "Id" .$row['ID']. " Brand: " .$row['Brand']. " Model: " .$row['Brand']. " Color: " .$row['Color'] ;
		}
		
	}
 
 
 
 
 
$sql = "INSERT INTO Cars (ID, Brand, Model, Color)
VALUES ('', 'RTYREY', 'ERTUERT', 'White')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
 
 
 
 
 
 
 
 
 }
echo "<br>";
if ($conn->connect_error) {
   die(" Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";





function CloseCon($conn)
 {
 $conn -> close();
 }
   ?>
  
  
  
  
  
  
  
  
  
  