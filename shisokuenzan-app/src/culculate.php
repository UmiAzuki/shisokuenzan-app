
<?php

    $answer = 0;
    $left = 0;
    $right = 0;
    $symbol = 0;
    if(isset($_POST["button_sum"])){
        $left = $_POST["left"];
        $right = $_POST["right"];
        $symbol = $_POST["symbol"];
        if($symbol == "plus"){
            $answer = $left + $right;
        }
        elseif($symbol == "minus"){
            $answer = $left - $right;
        }
        elseif($symbol == "multiplied"){
            $answer = $left * $right;
        }
        else{
            $answer = $left / $right;
        }
    }
?>