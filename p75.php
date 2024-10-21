<!DOCTYPE html>
<html>
<head>
    <title>Customer Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Customer Information</h2>

<table>
    <tr>
        <th>C_Id</th>
        <th>C_name</th>
        <th>Name_Item_purchased</th>
        <th>Review_product</th>
    </tr>

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

    // SQL query to select all records from Customer table
    $sql = "SELECT * FROM Customer1";
    $result = mysqli_query($conn, $sql);

    // Check if there are records
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["C_Id"] . "</td>";
            echo "<td>" . $row["C_name"] . "</td>";
            echo "<td>" . $row["Name_Item_purchased"] . "</td>";
            echo "<td>" . $row["review_product"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }

    // Close connection
    mysqli_close($conn);
    ?>

</table>

</body>
</html>
