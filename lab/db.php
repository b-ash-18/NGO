<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="db.php" method="POST">
        <label for="">eid: </label>
        <input type="number" name="eid"><br>
        <label for="">name: </label>
        <input type="text" name="ename"><br>
        <label for="">salary: </label>
        <input type="number" name="esal"><br>
        <input type="submit">
    </form>
</body>
</html>



<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbms";


    $conn = new mysqli($servername, $username , $password , $dbname , 3307);
    if($conn->connect_error){
        die("Connection failure : " . $conn->connect_error);
    }
    // else{
    //     echo "Successfully connected";
    // }
    if(isset($_POST['eid'])){
        $eid = $_POST['eid'];
    }if(isset($_POST['ename'])){
        $ename = $_POST['ename'];
    }if(isset($_POST['esal'])){
        $esal = $_POST['esal'];
    }
    $sql = "INSERT INTO form (eid , ename , esal) VALUES(101,'arjun' ,50000);";

    if($conn->query($sql) == TRUE){
        // while($row = $result->fetch_assoc()){
        //     echo "eid: " . $row["eid"] . "  ename: " . $row["ename"] . "   employee salary:" . $row["esal"] . "<br>";
        // }
        echo "succesfully inserted data";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}

?>