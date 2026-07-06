<?php
session_start();
require "db.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}

$stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute([":id" => $_SESSION["user_id"]]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $re_new_password = $_POST["re_new_password"];

    if (!password_verify($current_password, $user["password"])) {
        $message = "<div class='error'>Current password is not the same with the old password.</div>";
    } elseif ($new_password !== $re_new_password) {
        $message = "<div class='error'>New password and Re-Enter new password should be the same.</div>";
    } else {
        $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);

        $update = $conn->prepare("UPDATE users SET password = :password WHERE id = :id");
        $update->execute([
            ":password" => $hashed_new_password,
            ":id" => $_SESSION["user_id"]
        ]);

        $message = "<div class='success'>Password successfully reset.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <p style="text-align:right;">
        <a href="logout.php">Log-out</a>
    </p>

    <h1>User Information Form</h1>

    <?php echo $message; ?>

    <p>
        <b>Welcome</b>
        <?php echo htmlspecialchars($user["first_name"] . " " . $user["middle_name"] . " " . $user["last_name"]); ?>
    </p>

    <p><b>Birthday:</b> <?php echo htmlspecialchars($user["birthday"]); ?></p>

    <h3>Contact Details</h3>
    <p><b>Email:</b> <?php echo htmlspecialchars($user["email"]); ?></p>
    <p><b>Contact:</b> <?php echo htmlspecialchars($user["contact"]); ?></p>

    <hr>

    <h3>RESET PASSWORD</h3>

    <form method="POST" action="">
        <label>Enter Current Password:</label>
        <input type="password" name="current_password" required>

        <label>Enter New Password:</label>
        <input type="password" name="new_password" required>

        <label>Re-Enter New Password:</label>
        <input type="password" name="re_new_password" required>

        <button type="submit">Reset Password</button>
    </form>

</div>

</body>
</html>