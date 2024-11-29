<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="26.php" method="POST">
        <label for="">name: </label>
        <input type="text" name="name"><br>
        <label for="">email: </label>
        <input type="email" name="email"><br>
        <label for="">password: </label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>


<?php
if(isset($_POST["name"])){
    $name = $_POST['name'];
    echo "hello $name <br>";
}
if(isset($_POST["email"])){
    $name = $_POST['email'];
    echo "email is : $name <br>";
}
if(isset($_POST["password"])){
    $name = $_POST['password'];
    echo "your secret password is : $name <br>";
}
