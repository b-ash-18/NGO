<?php
    function fact($num){
        if($num == 0){
            return 1;
        }
        else if($num == 1){
            return 1;
        }
        return $num * fact($num-1);
    }
    $num = 6;
    echo "factorial of $num: " . fact($num);

?>