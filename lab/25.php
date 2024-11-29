<?php

function indexArray(){
    $arr1 = array("Tata" , "Maruti Suzuki" , "Machindra" );
    foreach( $arr1 as $x){
       echo "$x <br>";
    }
}
indexArray();

echo "<br>";

function associativeArray(){
    $arr2 = array("Model" => "XUV500" , "Color" => "Black" , "Year" => 2017);
    foreach($arr2 as $y => $x){
        echo "$y : $x <br>";
    }
}
associativeArray();

?>