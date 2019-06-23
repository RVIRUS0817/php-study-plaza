<?php 

/**
 * 配列のキーの指定
 * 
 */

$var = [];

$var[0] = 14;
$var[2] = 'Tokyo';
$var[-4] = 8400;
//var_dump($var);

$var['adachin'] = 100;
$var['chinpo'] = 'chinchin';
//var_dump($var);

$key = 'chinko';
$var["price_$key"] = 1200;
var_dump($var);

?>