<?php

$count = 0;
$sum = 0;

while ($count < 10){
    $count += 1;

    if ($count % 2 == 0) {
        print $count . "はスキップ\n";   
        continue;
    }

    $sum += $count;

}
print 'sum = '.$sum . "\n";
?>