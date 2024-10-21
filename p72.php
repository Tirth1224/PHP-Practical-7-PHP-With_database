<!DOCTYPE html>
<html>
<head>
    <title>Create Database</title>
</head>
<body>

<h2>Create Database</h2>

<form method="post" action="">
  Database Name: <input type="text" name="dbname">
  <input type="submit" name="submit" value="Create">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Collect database name from the form
    $dbname = $_POST['dbname'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>

</body>
</html>
