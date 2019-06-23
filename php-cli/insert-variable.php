<?php
/**
 * 代入の検証
 */

$num1 = 300;
$num2 = $num1; // 300が入る

$num1 = 100;

//echo $num2; // $num2は300のまま

/**
 * 参照渡しの検証
 */

$num3 = 100;
// $num4 =& $num3;
$num4 = &$num3; // 変数セット
$num3 = 200;

echo $num3;
echo $num4;

?>