<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pr7";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create customer table
$sql = "CREATE TABLE IF NOT EXISTS Customer1 (
    C_Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    C_name VARCHAR(30) NOT NULL,
    Name_Item_purchased VARCHAR(50) NOT NULL,
    review_product TEXT
)";

if (mysqli_query($conn, $sql)) {
    echo "Customer table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
