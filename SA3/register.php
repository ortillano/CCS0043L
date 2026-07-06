<?php
require "db.php";

$message = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST["first_name"]);
    $middle_name = trim($_POST["middle_name"]);
    $last_name = trim($_POST["last_name"]);
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $birthday = trim($_POST["birthday"]);
    $email = trim($_POST["email"]);
    $contact = trim($_POST["contact"]);

    if ($password !== $confirm_password) {
        $message = "<div class='error'>Password and confirm password are not the same.</div>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO users 
                    (first_name, middle_name, last_name, username, password, birthday, email, contact)
                    VALUES 
                    (:first_name, :middle_name, :last_name, :username, :password, :birthday, :email, :contact)";

            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ":first_name" => $first_name,
                ":middle_name" => $middle_name,
                ":last_name" => $last_name,
                ":username" => $username,
                ":password" => $hashed_password,
                ":birthday" => $birthday,
                ":email" => $email,
                ":contact" => $contact
            ]);

            $message = "<div class='success'>Registration successful. You can now login.</div>";

            $result = "
            <div class='result'>
                <p><b>Full Name:</b> $first_name $middle_name $last_name</p>
                <p><b>Username:</b> $username</p>
                <p><b>Password:</b> $password</p>
                <p><b>Birthday:</b> $birthday</p>
                <p><b>Email:</b> $email</p>
                <p><b>Contact Number:</b> $contact</p>
            </div>";

        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $message = "<div class='error'>Username already exists.</div>";
            } else {
                $message = "<div class='error'>Error: " . $e->getMessage() . "</div>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>My Personal Information</h2>

    <?php echo $message; ?>

    <form method="POST" action="">
        <label>First Name</label>
        <input type="text" name="first_name" required>

        <label>Middle Name</label>
        <input type="text" name="middle_name" required>

        <label>Last Name</label>
        <input type="text" name="last_name" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <label>Birthday</label>
        <input type="text" name="birthday" placeholder="January 30 1993" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact" required>

        <button type="submit">Submit</button>
    </form>

    <?php echo $result; ?>

    <p style="text-align:center;">
        <a href="index.php">Go to Login</a>
</div>

</body>
</html>