<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <style>
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Student Information</h2>

<?php
$students = array(
    array("name" => "Qifrey", "image" => "https://miokiishop.com/cdn/shop/files/358693599_260972389877397_4005787476664137639_n_1_1946x.jpg?v=1688684966", "age" => 24, "birthday" => "November 19, 1989", "contact" => "09123456789"),
    array("name" => "Ayato", "image" => "https://static.wikitide.net/hoyodexwiki/thumb/3/3d/Kamisato_Ayato_%28YS-MU%29.png/250px-Kamisato_Ayato_%28YS-MU%29.png", "age" => 25, "birthday" => "March 26, 1989", "contact" => "09234567890"),
    array("name" => "Hanni", "image" => "https://i.namu.wiki/i/POt-4JA9YSBy72MnlVfckj2xI_RA0zlPBenrRE-vVCPVI07OCHJqSvuA0Zd6m0zUclry5KcpWzj8SgNuFMJP1A.webp", "age" => 21, "birthday" => "October 6, 2004", "contact" => "09345678901"),
    array("name" => "Dani", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxlcRSewpAhQDV-WTsxPuduxCrM6jfsnNQzw&s", "age" => 21, "birthday" => "April 11, 2005", "contact" => "09456789012"),
    array("name" => "Hyein", "image" => "https://nolae.eu/cdn/shop/articles/hyein-newjeans-profil-225818.jpg?v=1734955854&width=1920", "age" => 18, "birthday" => "April 21, 2008", "contact" => "09567890123"),
    array("name" => "Haerin", "image" => "https://upload.wikimedia.org/wikipedia/commons/a/a7/Haerin_Seoul_Fashion_Week_3.jpg?utm_source=en.wikipedia.org&utm_campaign=index&utm_content=original", "age" => 20, "birthday" => "May 15, 2006", "contact" => "09678901234"),
    array("name" => "Minji", "image" => "https://en.kpop-star.net/wp-content/uploads/2023/02/minji-%E3%82%A2%E3%82%A4%E3%82%AD%E3%83%A3%E3%83%83%E3%83%81.jpg", "age" => 22, "birthday" => "May 7, 2004", "contact" => "09789012345"),
    array("name" => "Jimin", "image" => "https://cdn.i-scmp.com/sites/default/files/styles/768x768/public/images/methode/2018/10/13/d79e1498-cd34-11e8-9460-2e07e264bd11_1280x720_025804.JPG?itok=kcvliGYd", "age" => 30, "birthday" => "October 13, 1995", "contact" => "09890123456"),
    array("name" => "Taehyung", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWps67O_IgNLCMEJrOBticCDMrVePlGPf7kw&s", "age" => 30, "birthday" => "December 30, 1995", "contact" => "09901234567"),
    array("name" => "Yoongi", "image" => "https://i.mydramalist.com/k2ydj_5c.jpg", "age" => 33, "birthday" => "March 9, 1993", "contact" => "09012345678")
);

usort($students, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});
?>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
    </tr>

    <?php
    $no = 1;
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $student["name"] . "</td>";
        echo "<td><img src='" . $student["image"] . "' alt='Student Image'></td>";
        echo "<td>" . $student["age"] . "</td>";
        echo "<td>" . $student["birthday"] . "</td>";
        echo "<td>" . $student["contact"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>