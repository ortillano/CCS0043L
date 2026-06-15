<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorite Colors Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Enter Your Favorite Colors</h1>
    <form method="post" action="ResultColors.php">
        <label>Favorite Color 1:</label>
        <input type="text" name="color1" placeholder="e.g. Red" required>
        <label>Favorite Color 2:</label>
        <input type="text" name="color2" placeholder="e.g. Orange" required>
        <label>Favorite Color 3:</label>
        <input type="text" name="color3" placeholder="e.g. Yellow" required>
        <label>Favorite Color 4:</label>
        <input type="text" name="color4" placeholder="e.g. Green" required>
        <label>Favorite Color 5:</label>
        <input type="text" name="color5" placeholder="e.g. Blue" required>
        <input type="submit" value="☆  Send Colors  ☆">
    </form>
</div>
</body>
</html>