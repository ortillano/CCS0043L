<?php
$fruitDirectory = [
    [
        "name" => "Apple",
        "image" => "https://i.pinimg.com/736x/43/d8/b1/43d8b14f58eb76354f6cc155188f9a54.jpg",
        "description" => "Red or Green",
        "facts" => "Apples are rich in fiber and vitamin C, and they promote good heart health."
    ],
    [
        "name" => "Banana",
        "image" => "https://i1-c.pinimg.com/736x/31/a1/b5/31a1b58ae9b1d9db9b49a7a617de7e93.jpg",
        "description" => "Yellow",
        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
    ],
    [
        "name" => "Blueberry",
        "image" => "https://i.pinimg.com/736x/ae/50/b4/ae50b40b8d2de1fdf16d19c2ed75926b.jpg",
        "description" => "Blue",
        "facts" => "Blueberries are classified as a superfood and are packed filled with powerful antioxidants."
    ],
    [
        "name" => "Cherry",
        "image" => "https://i1-c.pinimg.com/1200x/dc/eb/e0/dcebe08f6d9cfaf849ad6776d60abc52.jpg",
        "description" => "Deep Red",
        "facts" => "Cherries contain melatonin, which can help promote a better quality of night sleep."
    ],
    [
        "name" => "Grapes",
        "image" => "https://i1-c.pinimg.com/1200x/34/0a/d7/340ad71fe9f0d49176ef79cd6aee3fdb.jpg",
        "description" => "Purple or Green",
        "facts" => "Grapes have been cultivated for thousands of years and are widely used to make wine."
    ],
    [
        "name" => "Mango",
        "image" => "https://i.pinimg.com/736x/20/09/15/2009154498c522ac3ccf738e9499191b.jpg",
        "description" => "Yellow/Orange",
        "facts" => "Mangoes are known as the king of fruits in many tropical regions around the world."
    ],
    [
        "name" => "Orange",
        "image" => "https://i.pinimg.com/736x/45/68/06/4568063d1a3c073c4c75cd89e12ab36d.jpg",
        "description" => "Orange",
        "facts" => "Oranges are widely famous for their incredibly high vitamin C nutrient contents."
    ],
    [
        "name" => "Peach",
        "image" => "https://i1-c.pinimg.com/1200x/db/3c/28/db3c28c68500990d160ac6b771c2f9a5.jpg",
        "description" => "Pinkish Orange",
        "facts" => "Peaches are members of the rose family and are highly native to Northwest China."
    ],
    [
        "name" => "Strawberry",
        "image" => "https://i.pinimg.com/736x/bf/ac/11/bfac117f85bd66ab46703ed667c25757.jpg",
        "description" => "Bright Red",
        "facts" => "Strawberries are unique because they wear their seeds completely on the outside."
    ],
    [
        "name" => "Watermelon",
        "image" => "https://i.pinimg.com/736x/30/40/9d/30409d2dc797fc70c1bea8e104b20664.jpg",
        "description" => "Green Striped",
        "facts" => "Watermelons consist of roughly 92% pure water, making them remarkably refreshing."
    ]
];

usort($fruitDirectory, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fruit Directory</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 2px solid #ffb6c1;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ffe4e1;
            color: #d15c7d;
            text-align: center;
        }
        .main-header {
            text-align: center;
            font-size: 1.2em;
            background-color: #ffc0cb;
            color: #ffffff;
        }
        img {
            display: block;
            margin: 0 auto;
            max-width: 150px;
            height: auto;
        }
        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th colspan="4" class="main-header">My Fruits</th>
        </tr>
        <tr>
            <th style="width: 20%;">Image</th>
            <th style="width: 15%;">Name</th>
            <th style="width: 20%;">Description</th>
            <th style="width: 45%;">Facts</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fruitDirectory as $fruit): ?>
            <tr>
                <td><img src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>"></td>
                <td class="center-text" style="color: #d15c7d; font-weight: bold;"><?php echo $fruit['name']; ?></td>
                <td class="center-text"><?php echo $fruit['description']; ?></td>
                <td><?php echo $fruit['facts']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>