<!DOCTYPE html>
<html>
<head>
    <title>Array Computation</title>
    <style>
        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
 
<?php
$numbers = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
 
$sum = array_sum($numbers);
 
$difference = $numbers[0];
$product = $numbers[0];
$quotient = $numbers[0];
 
for ($i = 1; $i < count($numbers); $i++) {
    $difference -= $numbers[$i];
    $product *= $numbers[$i];
    $quotient /= $numbers[$i];
}
?>
 
<table>
    <tr>
        <th colspan="2">Array List: <?php echo implode(", ", $numbers); ?></th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $sum; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $difference; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $product; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $quotient; ?></td>
    </tr>
</table>
 
</body>
</html>