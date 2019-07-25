<?php
/**
 * クラス内で変数、関数を定義する
 */

// 例: 現在のチャンネル番号を知らせるテレビ

// これまで覚えた知識を使うと---------
$channelNo = 1; // チャンネル番号の変数を定義

// 現在のチャンネル番号を知らせる関数をつくる
function displayChannel($channel) {
    print('現在のチャンネルは' . $channel . "\n");
}
displayChannel($channelNo);

// ? じゃあテレビが2台3台と必要になった時は？

// クラスとして定義し再利用可能なものにする
class Television {
    // クラス内で定義する変数は「プロパティ」と呼ばれ
    public $channelNo;

    // クラス内で定義する関数は「メソッド」と呼ばれる
    function displayChannel()
    {
        // print('現在のチャンネルは' . $channel . "\n");
        print('現在のチャンネルは' . $this->channelNo . "\n");
    }
}

$tv = new Television(); // Objectとして実体化
$tv->channelNo = 3;
$tv->displayChannel(); // 現在のチャンネルは3

// var_dump($tv);

$tv2 = new Television(); // Objectとして実体化
$tv2->channelNo = 6;
$tv2->displayChannel(); // 現在のチャンネルは3

// クラス(設計図)をもとにつくられたオブジェクト(物体)なので
// $tv と $tv2は干渉し合うことはない
var_dump($tv);
var_dump($tv2);
