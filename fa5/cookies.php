<?php
if (isset($_POST['submit'])) {
  setcookie("firstname", $_POST['firstname'], time() + 10, "/");

  setcookie("middlename", $_POST['middlename'], time() + 20, "/");

  setcookie("lastname", $_POST['lastname'], time() + 30, "/");

  header("Location: cookies.php");

  exit();
}

$fn_display = $_COOKIE['firstname'] ?? 'Not yet available (or expired) ˙◠˙';

$mn_display = $_COOKIE['middlename'] ?? 'Not yet available (or expired) ˙◠˙';

$ln_display = $_COOKIE['lastname'] ?? 'Not yet available (or expired) ˙◠˙';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Cookies Activity</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
<div class="container">
    <h1>Cookies Lifespan Tracker</h1>
    <form method="post">
    <label>First Name (Expires in 10s):</label>
    <input type="text" name="firstname" required>
    <label>Middle Name (Expires in 20s):</label>
    <input type="text" name="middlename" required>
    <label>Last Name (Expires in 30s):</label>
    <input type="text" name="lastname" required>
    <input type="submit" name="submit" value="Set Cookies">
</form>
<div class="result">

<h3>Cookie States (Refresh page to view status Changes):</h3>
<p><strong>First Name:</strong> <?= htmlspecialchars($fn_display) ?></p>
<p><strong>Middle Name:</strong> <?= htmlspecialchars($mn_display) ?></p>
<p><strong>Last Name:</strong> <?= htmlspecialchars($ln_display) ?></p>

</div>
</div>
</body>
</html>
 