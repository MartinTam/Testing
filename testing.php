<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Testing php</title>
    </head>

    <body>

        <form action = "testing.php" method = "get">

            <input type="number" name = "num1">
            <input type="number" name = "num2">
            <input type = "submit">

        </form>

        Sum of your two numbers is: 
        <?php

            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];

            if (isset($num1) && isset($num2)){
                echo ($_GET["num1"] + $_GET["num2"]);                
            }
            else{
                echo(0);
            };

            $num1 = 0;
            $num2 = 0;

        ?>

    </body>

</html>