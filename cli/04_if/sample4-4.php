<?php
/**
 * 論理演算子
 */

// $num は整数 $numが 15 かつ 5の倍数($num % 5 == 0)のとき　'hoge'　
$num = 15;

if ($num == 15 && $num % 5 == 0){
    print_r('hoge');
}

// $num は整数 $numが 3 または 5の倍数( % 5 == 0)のとき　'tanaka'　出力

$num = 3;

if ($num == 3 || $num % 5 == 0){
    print_r('tanaka');
}

?>