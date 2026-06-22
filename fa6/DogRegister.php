<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_databse"; 
$port = 3306;

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $d_name = $_POST['dog_name'];
    $d_breed = $_POST['dog_breed'];
    $d_age = $_POST['dog_age'];
    $d_add = $_POST['dog_address'];
    $d_color = $_POST['dog_color'];
    $d_height = $_POST['dog_height'];
    $d_weight = $_POST['dog_weight'];

    $stmt = $conn->prepare("INSERT INTO dogs (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $d_name, $d_breed, $d_age, $d_add, $d_color, $d_height, $d_weight);

    if ($stmt->execute()) {
        $message = "<p id='status-message' class='status-msg'>Dog information saved successfully!</p>";
    } else {
        $message = "<p id='status-message' class='status-msg' style='color: red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Dog Registry</h2>
    <?php echo $message; ?>
    
    <form action="DogRegister.php" method="POST">
        <label>Dog Name:</label>
        <input type="text" name="dog_name" required>

        <label>Dog Breed:</label>
        <input type="text" name="dog_breed" required>

        <label>Dog Age:</label>
        <input type="text" name="dog_age" required>

        <label>Dog Address:</label>
        <input type="text" name="dog_address" required>

        <label>Dog Color:</label>
        <input type="text" name="dog_color" required>

        <label>Dog Height:</label>
        <input type="text" name="dog_height" placeholder="e.g., 50 cm" required>

        <label>Dog Weight:</label>
        <input type="text" name="dog_weight" placeholder="e.g., 20 kg" required>

        <input type="submit" value="Save Dog Information">
    </form>
    <a class="nav-link" href="DogView.php">View Registered Dogs &rarr;</a>
</div>

<script src="script.js"></script>
</body>
</html>