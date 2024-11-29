<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="3.php" method="post">
        <label for="radius">radius:</label><br>
        <input type="text" name="radius" id="radius"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = 2 * pi() * $radius;
    $area = pi() * pow($radius, 2);
    $volume = 4/3 * pi() * pow($radius , 3);

    echo "Circumference is {$circumference}<br>";
    echo "Area is {$area}<br>";
    echo "Volume is {$volume}<br>";
    
?>