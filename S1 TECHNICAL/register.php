<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #ffe4e1;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .form-box {
            width: 400px;
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            border: 3px solid #ffb6c1;
            position: relative;
        }

        .flower-tl { position: absolute; top: 10px; left: 10px; color: #ff69b4; }
        .flower-br { position: absolute; bottom: 10px; right: 10px; color: #ff69b4; }

        h2 {
            text-align: center;
            color: #ff1493;
            margin-top: 0;
        }

        label {
            display: block;
            color: #db7093;
            font-weight: bold;
            margin-top: 10px;
            font-size: 14px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ffc0cb;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .submit-btn {
            width: 100%;
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 12px;
            margin-top: 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #db7093;
        }

        .display-area {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff0f5;
            border: 1px dashed #ff69b4;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="form-box">
    <span class="flower-tl">✿</span>
    <span class="flower-br">❀</span>

    <h2>Student Registration Form</h2>

    <form method="POST">
        <label>First Name</label>
        <input type="text" name="fname" placeholder="Enter your first name" required>

        <label>Middle Name</label>
        <input type="text" name="mname" placeholder="Enter your middle name">

        <label>Last Name</label>
        <input type="text" name="lname" placeholder="Enter your last name" required>

        <label>Age</label>
        <input type="number" name="age" placeholder="How old are you?" required>

        <label>Gender</label>
        <select name="gender" required>
            <option value="" disabled selected>-- Select Gender --</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>

        <label>Course</label>
        <input type="text" name="course" placeholder="e.g. BSIT" required>

        <input type="submit" name="submit" value="Register ♡" class="submit-btn">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $first = $_POST['fname'];
        $middle = $_POST['mname'];
        $last = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];

        $full_name = strtoupper($first . " " . $middle . " " . $last);
        $upper_course = strtoupper($course);

        echo "<div class='display-area'>";
        echo "<b>Full Name:</b> " . htmlspecialchars($full_name) . "<br>";
        echo "<b>Age:</b> " . htmlspecialchars($age) . "<br>";
        echo "<b>Gender:</b> " . htmlspecialchars($gender) . "<br>";
        echo "<b>Course:</b> " . htmlspecialchars($upper_course);
        echo "</div>";
    }
    ?>
</div>

</body>
</html>