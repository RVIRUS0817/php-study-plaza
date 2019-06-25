<?php

/**
 * 連想配列
 */

// 変数で書く場合
$apple = 'りんご';
$lemon = 'レモン';
$orange = 'オレンジ';

// 配列で書くと？
$array2 = ['りんご', 'レモン', 'オレンジ'];

$array = [$apple, $lemon, $orange];

//var_dump($array);

// 連想配列
$array = [
    'apple' => 'りんご',
    'lemon' => 'レモン',
    'orange' => 'オレンジ',
];

// var_dump($array);

// レモンを取り出して出力したい
$array['lemon'];  // ここにレモンが入ってる

var_dump($array['lemon']);
var_dump($array2[1]);
?>