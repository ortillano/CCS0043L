<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function</title>
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
function computeValues($num1, $num2, $num3) {
    $addition = $num1 + $num2 + $num3;
    $subtraction = $num1 - $num2 - $num3;
    $multiplication = $num1 * $num2 * $num3;
    $division = $num1 / $num2 / $num3;
 
    return array($addition, $subtraction, $multiplication, $division);
}
 
$param1 = 25;
$param2 = 13;
$param3 = 6;
 
$result = computeValues($param1, $param2, $param3);
?>
 
<table>
    <tr>
        <th colspan="2">My Parameter Values: <?php echo "$param1, $param2, $param3"; ?></th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $result[0]; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $result[1]; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $result[2]; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $result[3]; ?></td>
    </tr>
</table>
 
</body>
</html>