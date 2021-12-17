<!DOCTYPE html>
<html>
<head>
    <title>Лаба: 9</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число для переменной x, которая больше 1:</p>
        <input type="text" name="x">
        <p>Введите число для переменной количества n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $i = 0;
            for($a=0; $a<=$n; $a++){
                $i=i+((x**((2*n)+1))/((2*n)+1));
            }

            echo $i;
    ?>
</body>
</html>