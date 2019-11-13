<?
/**
 * アクセス修飾子
 *   public     クラス内、クラス外のどこからでもアクセス可能
 *   private    同じクラス内からのみアクセス可能
 *   protected  同じクラス、及び子クラスからアクセス可能
 */

// テレビのチャンネル番号は1~12の数字しか受け付けないように変更する

// テレビの設計図
class Television {
    // public から privateへ変更
    private $channelNo; // チャンネル番号

    // 現在のチャンネルを表示
    function dispChannel()
    {
        print('現在のチャンネルは' . $this->channelNo . "\n");
    }

    // チャンネルを変更する
    function setChannel($channel) 
    {
        // チャンネル番号は1以上かつ12以下を許可
        // 値の正当性をチェックすることをバリデーションという
        if (($channel >= 1) && ($channel <= 12)) {
            $this->channelNo = $channel;
            $this->dispChannel();    
        } else {
            print("チャンネルは1~12までしか指定できません\n");
        }
    }
}

$tv = new Television();

// クラスの外からプロパティにアクセスできなくなる
//$tv->channelNo = 10000;
// var_dump($tv->channelNo);

// メソッドを通してのみ変更できる
$tv->setChannel(10000); // 許可されない
$tv->setChannel(3); // 許可される
