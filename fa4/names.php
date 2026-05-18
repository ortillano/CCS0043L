<?php
$people = [
    "Zackary Santos" => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "21", "bday" => "Aug 14", "phone" => "09123456789"],
    "Abigail Cruz"   => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "20", "bday" => "Jan 05", "phone" => "09837623211"],
    "Michael Reyes"  => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "22", "bday" => "Mar 22", "phone" => "09156782341"],
    "Chloe Bautista" => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "19", "bday" => "Nov 12", "phone" => "09274563821"],
    "David Garcia"   => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "21", "bday" => "May 30", "phone" => "09351234567"],
    "Bianca Lao"     => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "20", "bday" => "Jul 19", "phone" => "09478912345"],
    "Ethan Mendoza"  => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "22", "bday" => "Sep 03", "phone" => "09183456789"],
    "Grace Vill"     => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "21", "bday" => "Dec 25", "phone" => "09997654321"],
    "John Doe"       => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "23", "bday" => "Feb 18", "phone" => "09837623232"],
    "Maria Clara"    => ["img" => "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1114445501.jpg", "age" => "18", "bday" => "Oct 10", "phone" => "09171112223"]
];

ksort($people);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pink PHP Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff5f7;
            margin: 40px;
        }
        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(255, 182, 193, 0.3);
        }
        table, th, td {
            border: 1px solid #ffb6c1;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #ffc0cb;
            color: #4a4a4a;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #fff0f2;
        }
        img {
            border-radius: 50%;
            border: 2px solid #ffb6c1;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>no.</th>
            <th>name</th>
            <th>image</th>
            <th>age</th>
            <th>birthday</th>
            <th>contact number</th>
        </tr>

        <?php 
        $i = 1;
        foreach ($people as $name => $details) { 
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $name; ?></td>
                <td><img src="<?php echo $details['img']; ?>" width="50" height="50"></td>
                <td><?php echo $details['age']; ?></td>
                <td><?php echo $details['bday']; ?></td>
                <td><?php echo $details['phone']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>