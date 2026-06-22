<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_databse"; 
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, d_name, d_breed, d_age, d_add, d_color, d_height, d_weight FROM dogs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Registered Dog Directory</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Breed</th>
        <th>Age</th>
        <th>Address</th>
        <th>Color</th>
        <th>Height</th>
        <th>Weight</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td style='font-weight: bold; color: #c2185b;'>" . $row["id"] . "</td>
                    <td>" . htmlspecialchars($row["d_name"]) . "</td>
                    <td>" . htmlspecialchars($row["d_breed"]) . "</td>
                    <td>" . htmlspecialchars($row["d_age"]) . "</td>
                    <td>" . htmlspecialchars($row["d_add"]) . "</td>
                    <td>" . htmlspecialchars($row["d_color"]) . "</td>
                    <td>" . htmlspecialchars($row["d_height"]) . "</td>
                    <td>" . htmlspecialchars($row["d_weight"]) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='8' class='status-msg' style='padding: 20px;'>No entries found.</td></tr>";
    }
    $conn->close();
    ?>
</table>

<div class="center-box">
    <a class="btn" href="DogRegister.php">&larr; Register Another Dog</a>
</div>

</body>
</html>