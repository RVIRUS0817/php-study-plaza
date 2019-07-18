<?php

$num = 100;

var_dump($num); // 100

/**
 * 引数に+2した値を返す関数
 * 
 */
function sum($num1){
    // ここで定義された変数は、ここでしか扱えない、参照できない
    // ローカル変数
    global $num; // グローバル変数を使うことを明示
    $sum = $num1 + 2;

    var_dump($num);

    return $sum;
}

sum(3); // 

// var_dump($sum); // とれない


?>