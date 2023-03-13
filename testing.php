<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Testing php</title>
    </head>

    <body>

        <form action="testing.php" method="POST">

            Number 1:
            <input type="number" name="num1">
            Number 2:
            <input type="number" name="num2">
            <input type="submit" value="Sum">

        </form>
        
        <?php

            $num1 = 0;
            $num2 = 0;
            
            if (isset($_POST["num1"])){
                $num1 = $_POST["num1"];
            };

            if (isset($_POST["num2"])){
                $num2 = $_POST["num2"];
            };

            $sum = $num1 + $num2;

            echo("Sum of the numbers is: $sum");


        ?>

    </body>

</html>