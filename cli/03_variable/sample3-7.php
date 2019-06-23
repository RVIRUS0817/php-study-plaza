<?php


define("TAX", 0.05);

$price1 = 100 * (1 + TAX );
print $price1;


// 定数と変数の違い

// 変数は上書きできる
// $tax = 0.05;
// $tax = 0.08;
// $tax = 0.10;

// 定数は上書きできない（エラー）
// define("TAX", 0.10);

?>