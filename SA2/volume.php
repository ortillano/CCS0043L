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

$cubeVol = calculateVolumeCube(8);
$prismVol = calculateVolumeRectangularPrism(10, 5, 6);
$cylinderVol = calculateVolumeCylinder(4, 12);
$coneVol = calculateVolumeCone(5, 12);
$sphereVol = calculateVolumeSphere(6);
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
            <td>s = 8</td>
            <td>V = s³</td>
            <td><?php echo round($cubeVol, 2); ?></td>
        </tr>
        <tr>
            <td>l = 10, w = 5, h = 6</td>
            <td>V = l × w × h</td>
            <td><?php echo round($prismVol, 2); ?></td>
        </tr>
        <tr>
            <td>r = 4, h = 12</td>
            <td>V = π × r² × h</td>
            <td><?php echo round($cylinderVol, 2); ?></td>
        </tr>
        <tr>
            <td>r = 5, h = 12</td>
            <td>V = (1/3) × π × r² × h</td>
            <td><?php echo round($coneVol, 2); ?></td>
        </tr>
        <tr>
            <td>r = 6</td>
            <td>V = (4/3) × π × r³</td>
            <td><?php echo round($sphereVol, 2); ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>