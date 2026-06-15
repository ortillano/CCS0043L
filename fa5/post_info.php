<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Personal Information</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<div class="container">
    <h1>GET Information</h1>
    <form method="post" onsubmit="sentMessage()">
        <label>First Name:</label>
        <input type="text" name="firstname" required>

        <label>Middle Name:</label>
        <input type="text" name="middlename" required>

        <label>Last Name:</label>
        <input type="text" name="lastname" required>

        <label>Date of Birth:</label>
        <input type="text" name="dob" placeholder="MM-DD-YYYY" required>

        <label>Address:</label>
        <input type="text" name="address" required>

        <input type="submit" value="Submit Info">
</form>

<?php if (!empty($_POST['firstname'])): ?>
    <div class="result">
        <p><strong>First Name:</strong> <?= htmlspecialchars($_POST['firstname']) ?></p>
        <p><strong>Middle Name:</strong> <?= htmlspecialchars($_POST['middlename']) ?></p>
        <p><strong>Last Name:</strong> <?= htmlspecialchars($_POST['lastname']) ?></p>
        <p><strong>Date of Birth:</strong> <?= htmlspecialchars($_POST['dob']) ?></p>
        <p><strong>Address:</strong> <?= htmlspecialchars($_POST['address']) ?></p>
</div>
<?php endif; ?>
</div>
</body>
</html>