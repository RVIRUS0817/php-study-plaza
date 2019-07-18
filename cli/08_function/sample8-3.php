<?php

// void型関数
function plusVoid($num1, $num2) {
    $sum = $num1 + $num2;
    // var_dump($sum); //
    // return $sum;
}

/**
 * 足し算して合計値を返却する関数
 * https://qiita.com/itosho/items/0f809e067a9e4a41515e
 * @param int $num1 足したい数
 * @param int $num2 足したい数
 * @return int $sum 合計値
 */
function plus($num1, $num2) {
    $sum = $num1 + $num2;

    return $sum;

    var_dump('aaaaa'); // 無効
}

$sumVoid = plusVoid(3,2);
var_dump($sumVoid);

$sum = plus(5,2);
var_dump($sum);


?>