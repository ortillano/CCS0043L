<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faith Yleine P. Ortillano | Resume</title>
    <style>
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }
        th, td {
            border: 2px solid #ffb6c1;
            padding: 15px;
            vertical-align: top;
            color: #4a4a4a;
        }
        .profile-pic-container {
            width: 30%;
            text-align: center;
            background-color: #ffe4e1;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #ffb6c1;
            display: block;
            margin: 0 auto;
        }
        .personal-info-container {
            width: 70%;
            background-color: #ffe4e1;
        }
        .personal-info-container h2 {
            color: #a94064;
            margin-top: 0;
        }
        .personal-info-container p {
            color: #5c5c5c;
        }
        .section-row h3 {
            margin-top: 0;
            margin-bottom: 5px;
            text-decoration: underline;
        }
        ul {
            margin: 5px 0;
            padding-left: 20px;
        }
        strong {
            color: #b85d7f;
        }
    </style>
</head>
<body>

<table>
    <tbody>
        <tr>
            <td class="profile-pic-container">
                <img class="profile-img" src="https://i1-c.pinimg.com/1200x/b1/48/8f/b1488fdac4488b4a116c6964c1735f60.jpg" alt="Profile Picture">
            </td>
            <td class="personal-info-container">
                <h2>Faith Yleine P. Ortillano</h2>
                <p><strong>Email:</strong> fportillano@fit.edu.ph<br>
                <strong>Phone:</strong> +63 912 345 6789<br>
                <strong>Address:</strong> Metro Manila, Philippines</p>
            </td>
        </tr>

        <tr class="section-row">
            <?php include('objective.php'); ?>
        </tr>

        <tr class="section-row">
            <?php include('education.php'); ?>
        </tr>

        <tr class="section-row">
            <?php include('skills.php'); ?>
        </tr>

        <tr class="section-row">
            <?php include('affiliation.php'); ?>
        </tr>

        <tr class="section-row">
            <?php include('experience.php'); ?>
        </tr>
    </tbody>
</table>

</body>
</html>