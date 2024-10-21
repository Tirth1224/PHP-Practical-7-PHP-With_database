<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pr7";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "create table student1 (id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL, ennrollment INT NOT NULL, primary key (id))";
if(mysqli_query($conn, $sql)){ 
    echo "Student table created successfully"; 
    }else{ 
    echo "Could not create table: ". mysqli_error($conn); 
    }
    mysqli_close($conn);
?>