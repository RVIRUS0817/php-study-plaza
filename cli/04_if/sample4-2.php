<?php
/**
 *  論理値
 */
$num = 8;

if ($num){
    // 条件式が真の時に実行する処理
    print_r('宣言済みの変数の場合');
}

// 文字列の'0'の場合
$num = '0';

if ($num){
    print_r('False');
}

// いちいち変数に入れる必要はない
if ('0') {
    print_r('ひっかからない');
}

if (!false) {
    print_r('!falseはひっかかる');
}

?>