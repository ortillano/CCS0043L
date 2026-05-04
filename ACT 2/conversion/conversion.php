<!DOCTYPE html>
<html>
<head>
    <title>Measure Conversion Chart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
 
        .container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            border: 2px solid black;
        }
 
        h1 {
            text-align: center;
            color: #3a5a80;
        }
 
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }
 
        th {
            background: yellow;
            padding: 10px;
            font-size: 18px;
        }
 
        td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }
 
        .header {
            text-align: center;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
 
<div class="container">
 
    <div class="header">
        <strong>Name:</strong> Faith Yleine Ortillano &nbsp;&nbsp;&nbsp;
        <strong>Date:</strong> <?php echo date("Y-m-d"); ?>
    </div>
 
    <h1>MEASURE CONVERSION CHART – LENGTHS (UK)</h1>
 
    <!-- METRIC -->
    <table>
        <tr><th colspan="3">METRIC CONVERSIONS</th></tr>
 
        <?php
            $cm = 1;
            $mm = $cm * 10;
 
            $dm = 1;
            $cm2 = $dm * 10;
 
            $m = 1;
            $cm3 = $m * 100;
 
            $km = 1;
            $m2 = $km * 1000;
        ?>
 
        <tr>
            <td>1 centimetre</td>
            <td>=</td>
            <td><?php echo $mm; ?> millimetres</td>
        </tr>
        <tr>
            <td>1 decimetre</td>
            <td>=</td>
            <td><?php echo $cm2; ?> centimetres</td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $cm3; ?> centimetres</td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $m2; ?> metres</td>
        </tr>
    </table>
 
    <!-- IMPERIAL -->
    <table>
        <tr><th colspan="3">IMPERIAL CONVERSIONS</th></tr>
 
        <?php
            $foot = 1;
            $inch = $foot * 12;
 
            $yard = 1;
            $foot2 = $yard * 3;
 
            $chain = 1;
            $yard2 = $chain * 22;
 
            $furlong = 1;
            $yard3 = $furlong * 220;
 
            $mile = 1;
            $yard4 = $mile * 1760;
        ?>
 
        <tr>
            <td>1 foot</td>
            <td>=</td>
            <td><?php echo $inch; ?> inches</td>
        </tr>
        <tr>
            <td>1 yard</td>
            <td>=</td>
            <td><?php echo $foot2; ?> feet</td>
        </tr>
        <tr>
            <td>1 chain</td>
            <td>=</td>
            <td><?php echo $yard2; ?> yards</td>
        </tr>
        <tr>
            <td>1 furlong</td>
            <td>=</td>
            <td><?php echo $yard3; ?> yards</td>
        </tr>
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $yard4; ?> yards</td>
        </tr>
    </table>
 
    <!-- METRIC TO IMPERIAL -->
    <table>
        <tr><th colspan="3">METRIC → IMPERIAL</th></tr>
 
        <?php
            $mm = 1;
            $inch = $mm * 0.03937;
 
            $cm = 1;
            $inch2 = $cm * 0.39370;
 
            $m = 1;
            $inch3 = $m * 39.37008;
            $foot = $m * 3.28084;
            $yard = $m * 1.09361;
 
            $km = 1;
            $yard2 = $km * 1093.6133;
            $mile = $km * 0.62137;
        ?>
 
        <tr>
            <td>1 millimetre</td>
            <td>=</td>
            <td><?php echo $inch; ?> inches</td>
        </tr>
        <tr>
            <td>1 centimetre</td>
            <td>=</td>
            <td><?php echo $inch2; ?> inches</td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $inch3; ?> inches</td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $foot; ?> feet</td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $yard; ?> yards</td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $yard2; ?> yards</td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $mile; ?> miles</td>
        </tr>
    </table>
 
    <!-- IMPERIAL TO METRIC -->
    <table>
        <tr><th colspan="3">IMPERIAL → METRIC</th></tr>
 
        <?php
            $inch = 1;
            $cm = $inch * 2.54;
 
            $foot = 1;
            $cm2 = $foot * 30.48;
 
            $yard = 1;
            $cm3 = $yard * 91.44;
            $meter = $yard * 0.9144;
 
            $mile = 1;
            $meter2 = $mile * 1609.344;
            $km = $mile * 1.609344;
        ?>
 
        <tr>
            <td>1 inch</td>
            <td>=</td>
            <td><?php echo $cm; ?> cm</td>
        </tr>
        <tr>
            <td>1 foot</td>
            <td>=</td>
            <td><?php echo $cm2; ?> cm</td>
        </tr>
        <tr>
            <td>1 yard</td>
            <td>=</td>
            <td><?php echo $cm3; ?> cm</td>
        </tr>
        <tr>
            <td>1 yard</td>
            <td>=</td>
            <td><?php echo $meter; ?> meters</td>
        </tr>
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $meter2; ?> meters</td>
        </tr>
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $km; ?> kilometers</td>
        </tr>
    </table>
 
</div>
 
</body>
</html>