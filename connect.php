<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "facul_app_sci";

// create connect 
$conn = new mysqli ($servername,$username,$password,$dbname);
#echo "connection successfuly:have fun with php";

// check connect
if($conn->connect_error) {
  die("connect unsucessful:".$conn->connect_error);
}

 
//CREATE A TABLE
$sql="CREATE TABLE IF NOT EXISTS users(id INT AUTO_INCREMENT PRIMARY KEY,
 username varchar(255) NOT NULL, password varchar(255) NOT NULL)";
 

/*
//check create table";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


 
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) ===TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  
  
 

*/  

//close connect
#$conn->close();  