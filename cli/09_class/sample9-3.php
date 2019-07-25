<?
/**
 * sample02で作ったTelevisionクラスに
 * チャンネルを変えるメソッドを追加しよう
 */

class Television {
    // クラス内で定義する変数は「プロパティ」と呼ばれ
    public $channelNo;

    // クラス内で定義する関数は「メソッド」と呼ばれる
    function displayChannel()
    {
        // print('現在のチャンネルは' . $channel . "\n");
        print('現在のチャンネルは' . $this->channelNo . "\n");
    }

    /**
     * チャンネルを変えるメソッド
     */
    function setChannel($number, $second)
    {
        echo $second . '秒後にチャンネル変えます';
        $this->channelNo = $number;
    }
}

$tv1 = new Television();
// $tv1->channelNo = 3;
$tv1->setChannel(3, 10);
var_dump($tv1);

