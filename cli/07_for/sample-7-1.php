<?php

// 0~9までを出力
for ($count = 0; $count < 10; $count++) {
  //  echo $count;
}

// 10~1までを出力
for ($count = 10; $count > 0; $count--) {
  // echo $count;
}

// 偶数のみ出力
for ($count = 0; $count < 10; $count++) {
  if ($count %2==0){
    // echo $count;
  }
}

// $countが5の時ループをぬける
for ($count = 0; $count < 10; $count++) {
//  echo $count;
  if ($count == 5) {
    break;
  }
}

// 偶数の時だけ処理をスキップ
for ($count = 0; $count < 10; $count++) {
  echo $count . "\n"; // 最初に通る

  // 偶数だったらスキップ
  if ($count % 2 == 0) {
    continue; // スキップ
  }

  // スキップされたら到達しない
  echo "スキップされない:" . $count . "\n";
}
?>
