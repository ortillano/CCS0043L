<?php

$fullName = "FAITH YLEINE P. ORTILLANO";
$location = "DEPARO, CALOOCAN";
$contactPhone = "09397259011";
$contactEmail = "fportillano@fit.edu.ph";
$portfolioUrl = "www.faithyleineortillano.com";

$profileBody = "Innovative IT Specialist with a passion for building scalable web and mobile applications. Experienced in full-stack development, database management, and UI/UX design. Committed to creating efficient, user-centered digital solutions that solve real-world problems.";

$expertiseList = ["Web Development", "App Development", "Python & JavaScript", "Database Design", "UI/UX Design", "API Integration", "Network Security", "Git & Version Control"];
$operationalSkills = ["System Architecture", "Agile Methodology", "Technical Documentation", "Cloud Deployment"];

$eduDegree = "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY";
$eduSchool = "College of Computer Studies | 2022 - 2026";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $fullName; ?> | Portfolio</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<aside class="sidebar">
<div class="header-main">
<h1><?php echo $fullName; ?></h1>
<p class="location"><?php echo $location; ?></p>
</div>
<div class="contact-section">
<p><?php echo $contactPhone; ?></p>
<p><?php echo $contactEmail; ?></p>
<p><?php echo $portfolioUrl; ?></p>
</div>
<section class="skills-section">
<h3>EXPERTISE</h3>
<ul>
<?php foreach($expertiseList as $skill): ?>
<li><?php echo $skill; ?></li>
<?php endforeach; ?>
</ul>
</section>
<section class="skills-section">
<h3>OPERATIONAL SKILLS</h3>
<ul>
<?php foreach($operationalSkills as $opSkill): ?>
<li><?php echo $opSkill; ?></li>
<?php endforeach; ?>
</ul>
</section>
</aside>
<main class="main-content">
<section class="profile">
<h2 class="section-title">PROFILE</h2>
<p><?php echo $profileBody; ?></p>
</section>
<section class="experience">
<h2 class="section-title">EXPERIENCE</h2>
<div class="job">
<h3>JUNIOR WEB DEVELOPER</h3>
<p class="meta">Freelance / Internship | 2025 - Present</p>
<ul>
<li>Developed and maintained responsive web applications using HTML, CSS, PHP, and JavaScript.</li>
<li>Designed and implemented database structures using MySQL to optimize data retrieval.</li>
</ul>
</div>
</section>
<section class="education">
<h2 class="section-title">EDUCATION</h2>
<div class="edu-item">
<h3><?php echo $eduDegree; ?></h3>
<p><?php echo $eduSchool; ?></p>
</div>
</section>
</main>
</div>
</body>
</html>