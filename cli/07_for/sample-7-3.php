<?php

// 連想配列からkeyとvalueを取り出す
$lists = [
  'apple' => 'りんご',
  'orange' => 'オレンジ' 
];

//var_dump($lists);
foreach ($lists as $key => $value){
  var_dump($key . $value);
}

?>