<?php

// 返信率=返信数 / 受信数 * 100を計算して返す関数
// Todo: PHP Docを書こう
function replyRate($reply, $receive){
    return $reply / $receive * 100;
}

// Todo: 名前と返信率を受け取って $nameさんの返信率は$replyRate%です。とvar_dumpする関数
function message($name, $replyRate){
    var_dump($name . 'さんの返信率は' . $replyRate . '%です');

    // return null;
}

// replyRate('ヤマダ', 100, 200);
$rate1 = replyRate(100, 200); //

message('ヤマダ', $rate1);

// replyRate('アンドウ', 200, 200);
$rate2 = replyRate(200, 200); //

message('アンドウ', $rate2);
?>
