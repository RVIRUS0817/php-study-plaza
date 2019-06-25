<?php

$num = 0;

// while ($num < 2) {   
//     print "num=".$num;
//     break;
//     // $num += 1; // $num = $num + 1
// }

$i = 0;

// Iのループ
while ($i < 3){
    // Iのループない実行したいもの 
    $j = 0;
    print "tanaka";

    if ($i == 1) {
        break; // Iのループを終了　Jには到達しない
    }

    // Jのループ
    while ($j < 3){
        // Jのループない実行したいもの 
        print 'ジェイソンは '.$j . "\n";
        $j += 1;

        break; // Jのループが1回で終わるだけで、Iのループは３回ある
    }
    $i += 1;
}




?>