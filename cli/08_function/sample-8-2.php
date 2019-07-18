<?php

/**
 * こんにちは。高橋さん
 * お元気ですか？
 * 
 * 出力できる関数をつくる
 */


function greeting(string $name = 'たなか', int $age = 3){
    var_dump('こんにちわ' . $name . 'ちゃん' . $age . 'だよな！');
    var_dump('なんだと！！！');
}

greeting('いなむー', 35);

greeting('あだち', 30);

greeting();

?>