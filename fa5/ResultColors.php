<?php
session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['colors'] = [
    $_POST['color1'],
    $_POST['color2'],
    $_POST['color3'],
    $_POST['color4'],
    $_POST['color5']
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result Colors Display</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Your Favorite Hues</h1>
    <?php if (!empty($_SESSION['colors'])): ?>
    <?php foreach ($_SESSION['colors'] as $color): ?>
    <div class="color-box" style="background: <?= htmlspecialchars($color) ?>;">
    <?= htmlspecialchars($color) ?>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <p style="color: #880e4f; text-align: center;">No favorite colors selected yet!</p>
<?php endif; ?>
<div style="text-align: center;">
<a href="FavoriteColor.php">← Modify Selection</a>
</div>
</div>
</body>
</html>