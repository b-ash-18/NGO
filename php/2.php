<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php" method="post">
        <label for="username">username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
    echo "hellfdfdfdo";
    echo "{$_POST["username"]} <br>";
    echo $_POST["password"] . "<br>";
?>


