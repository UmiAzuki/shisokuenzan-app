<!DOCTYPE html>

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

<html lang="ja">
    <head>
        <title>四則演算の電卓</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <form action="" method="post">
            <p>
            <input type="text" name="left" value="<?php echo $left; ?>"> 
            <select name="symbol">
                <option value="plus">＋</option>
                <option value="minus">ー</option>
                <option value="multiplied">×</option>
                <option value="divided">÷</option>
            </select>
            <input type="text" name="right" value="<?php echo $right; ?>"> =
            <span><?php echo $answer; ?></span>
            <input type="submit" name="button_sum" value="計算">
            </p>
        </form>
    </body>
</html>