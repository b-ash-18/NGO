<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $age = $_POST['age'];
    echo "hello $name , $usn , $age";
}
?>