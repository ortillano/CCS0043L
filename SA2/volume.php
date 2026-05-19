<?php
function calculateVolumeCube($side) {
    return pow($side, 3);
}

function calculateVolumeRectangularPrism($length, $width, $height) {
    return $length * $width * $height;
}

function calculateVolumeCylinder($radius, $height) {
    return pi() * pow($radius, 2) * $height;
}

function calculateVolumeCone($radius, $height) {
    return (1/3) * pi() * pow($radius, 2) * $height;
}

function calculateVolumeSphere($radius) {
    return (4/3) * pi() * pow($radius, 3);
}

$cubeVol = calculateVolumeCube(5);
$prismVol = calculateVolumeRectangularPrism(6, 4, 5);
$cylinderVol = calculateVolumeCylinder(3, 10);
$coneVol = calculateVolumeCone(3, 9);
$sphereVol = calculateVolumeSphere(4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-top: 20px;
        }
        th, td {
            border: 2px solid #808080;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ffffff;
        }
        .title-header {
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th colspan="3" class="title-header">Volume of Shapes</th>
        </tr>
        <tr>
            <th style="width: 33%;">Values</th>
            <th style="width: 33%;">Formula</th>
            <th style="width: 34%;">Answer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>s = 5</td>
            <td>V = s³</td>
            <td><?php echo round($cubeVol, 2); ?></td>
        </tr>
        <tr>
            <td>l = 6, w = 4, h = 5</td>
            <td>V = l × w × h</td>
            <td><?php echo round($prismVol, 2); ?></td>
        </tr>
        <tr>
            <td>r = 3, h = 10</td>
            <td>V = π × r² × h</td>
            <td><?php echo round($cylinderVol, 2); ?></td>
        </tr>
        <tr>
            <td>r = 3, h = 9</td>
            <td>V = (1/3) × π × r² × h</td>
            <td><?php echo round($coneVol, 2); ?></td>
        </tr>
        <tr>
            <td>r = 4</td>
            <td>V = (4/3) × π × r³</td>
            <td><?php echo round($sphereVol, 2); ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>