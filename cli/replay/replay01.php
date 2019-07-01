<?php

// [A,B,C,D,E..]
// {'key1','key2','key3'}

// 変数として定義するなら
$a = 'A';
$b = 'B';
$c = 'C';
$d = 'D';
$e = 'E';

// 配列として定義するなら
$array = ['A','B','C','D','E'];

/**
 * [0] => 'A'
 * [1] => 'B'
 * [2] => 'C'
 * [3] => 'D'
 * [4] => 'E'
 */

// 配列に変数を入れれる
$array = [$a, $b, $c, $d, $e];

// 配列の番号を指定して入れることもできる
$array[10] = 'Z';

/**
 * [0] => 'A'
 * [1] => 'B'
 * [2] => 'C'
 * [3] => 'D'
 * [4] => 'E'
 * [10] => 'Z'
 */

// 指定しないと、一番大きい番号+1に入る
$array[] = 'AA'; 

/**
 * [0] => 'A'
 * [1] => 'B'
 * [2] => 'C'
 * [3] => 'D'
 * [4] => 'E'
 * [10] => 'Z'
 * [11] => 'Z'
 */


?>