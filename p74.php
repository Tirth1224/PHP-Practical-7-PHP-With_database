<!DOCTYPE html>
<html>
<head>
    <title>Customer Feedback Form</title>
</head>
<body>

<h2>Customer Feedback Form</h2>

<form method="post" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="item">Item Purchased:</label><br>
    <input type="text" id="item" name="item"><br>
    <label for="review">Review:</label><br>
    <textarea id="review" name="review" rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $item = $_POST['item'];
    $review = $_POST['review'];

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

    // SQL query to insert feedback into Customer table
    $sql = "INSERT INTO Customer1 (C_name, Name_Item_purchased, review_product) VALUES ('$name', '$item', '$review')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>

</body>
</html>
