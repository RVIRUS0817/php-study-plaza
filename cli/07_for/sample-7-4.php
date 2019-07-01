<?php

// 参照渡しでのforeach
$pricelist = [100, 150, 200];
// var_dump($pricelist);

foreach ($pricelist as &$price) {
  $price *= 1.10;
}

unset ($price);
var_dump($pricelist);

// 参照わたしを使わないで計算した値を　$priceListTax にツッコんで出力
$pricelist = [100, 150, 200];
$inTax = []; // [110, 165, 220]

// $pricelistの値を 1.10倍したものを $inTaxに入れる
foreach ($pricelist as $price ) {
  // $price * 1.10; //
  // 演算子 +  *
  // 代入演算子 +=  *=
  $inTax[] = $price * 1.10;

}

var_dump($inTax);


?>