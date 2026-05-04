<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background: #f4f6ff;
        }
 
        .box {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
 
        h2 {
            color: #1d3557;
        }
 
        .output {
            font-size: 18px;
            line-height: 2;
            text-align: justify;
        }
    </style>
</head>
<body>
 
<div class="box">
 
    <div class="output">
        <?php
        for ($i = 0; $i <= 99; $i++) {
            echo str_pad($i, 2, "0", STR_PAD_LEFT) . ", ";
        }
        ?>
    </div>
</div>
 
</body>
</html>