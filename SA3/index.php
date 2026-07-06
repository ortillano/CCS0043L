<?php
session_start();
require "db.php";

if (isset($_SESSION["user_id"])) {
    header("Location: home.php");
    exit();
}

$message = "";

$saved_username = $_COOKIE["saved_username"] ?? "";
$saved_password = $_COOKIE["saved_password"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $remember = isset($_POST["remember"]);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute([":username" => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];

        if ($remember) {
            setcookie("saved_username", $username, time() + 86400 * 30);
            setcookie("saved_password", $password, time() + 86400 * 30);
        } else {
            setcookie("saved_username", "", time() - 3600);
            setcookie("saved_password", "", time() - 3600);
        }

        header("Location: home.php");
        exit();
    } else {
        $message = "<div class='error'>Invalid username or password.</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log-In Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Log-In Form</h2>

    <?php echo $message; ?>

    <form method="POST" action="">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($saved_username); ?>" required>

        <label>Password</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($saved_password); ?>" required>

        <p>
            <input type="checkbox" name="remember" style="width:auto;" 
            <?php if ($saved_username != "") echo "checked"; ?>>
            Remember Me
        </p>

        <button type="submit">Login</button>
    </form>

    <p style="text-align:center;">
        <a href="register.php">Create Account</a>
    </p>

</div>

</body>
</html>