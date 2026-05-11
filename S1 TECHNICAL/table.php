<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <style>
        body {
            background-color: #ffe4e1;
            font-family: "Comic Sans MS", "Chalkboard SE", "cursive", sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .table-container {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            border: 3px solid #ffb6c1;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        td {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 20px;
            border: 2px solid #ffffff;
            border-radius: 8px;
        }

        .pink-light {
            background-color: #fff0f5; 
            color: #db7093;           
        }

        .pink-dark {
            background-color: #ffb6c1; 
            color: white;
        }

        h1 {
            text-align: center;
            color: #ffb6c1;           
            font-size: 28px;
            margin-bottom: 20px;
        }

        .heart {
            color: #ffb6c1;
        }
    </style>
</head>

<body>

<div class="table-container">
    <h1><span class="heart">♡</span> Multiplication Table <span class="heart">♡</span></h1>

    <table>

    <?php

    for($row = 0; $row <= 10; $row++){

        echo "<tr>";

        for($col = 0; $col <= 10; $col++){

            $result = $row * $col;

            if(($row + $col) % 2 == 0){
                $color = "pink-light";
            }else{
                $color = "pink-dark";
            }

            echo "<td class='$color'>$result</td>";
        }

        echo "</tr>";
    }

    ?>

    </table>
</div>

</body>
</html>