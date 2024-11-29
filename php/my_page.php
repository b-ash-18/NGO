<!-- <?php
if(isset($_POST['form'])){
    $name = $_POST['form'];
    echo "hello , $name!";
}
?> -->




<html>
<head>
    <title>my page</title>
</head>
<body>
    <form action="another_page.php" method="POST">
    Enter your name: <input type="text" name="name" id="name">
    USN: <input type="text" name="usn">
    Age: <input type="number" name="age">
    <br>
    <button type="submit">Submit</button>
    </form>
</body>