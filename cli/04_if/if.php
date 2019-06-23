<?php

/**
 * $numに整数を代入。
 * $numが偶数の場合はhogeと出力
 * $numが奇数の場合はfugaと出力
 */

$num = 9;

if ($num %2==0){
    print 'hoge';
} else {
    print 'fuga';
}

// $numが9の時にadachinpo出力
// ブロックは省略できるが、あまりしないほうがいい
if ($num == 9)
    print 'adachinpo';
