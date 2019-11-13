<?
/**
 * 定数
 * 　$this->定数ではなく
 * 　self::定数として呼び出す
 * 　動的なプロパティは$this、静的なプロパティはself::
 * コンストラクタ
 *   オブジェクト生成時に必ず呼ばれるメソッド
 *   初期化処理などで使われる
 */

// テレビの設計図
class Television {
    // public から privateへ変更
    private $channelNo; // チャンネル番号

    // 定数を定義
    const ERROR_MSG = "チャンネルは1~12までしか指定できません\n";
    const MAX_CHANNERL = 12;
    const MIN_CHANNERL = 1;

    // コンストラクタ: オブジェクト生成時に必ず呼ばれる
    function __construct($channel = 3){
        $this->channelNo = $channel;
    }

    // 現在のチャンネルを表示
    function dispChannel()
    {
        print('現在のチャンネルは' . $this->channelNo . "\n");
    }

    // 最大のチャンネル数を取得
    // 静的メソッド
    public static function getMaxCh()
    {
        var_dump(self::MAX_CHANNERL);
    }    

    // チャンネルを変更する
    function setChannel($channel) 
    {
        // チャンネル番号は1以上かつ12以下を許可
        // 値の正当性をチェックすることをバリデーションという
        if (($channel >= self::MIN_CHANNERL) && ($channel <= self::MAX_CHANNERL)) {
            $this->channelNo = $channel;
            $this->dispChannel();    
        } else {
            print(self::ERROR_MSG);
        }
    }
}

// クラスとして呼び出す
// var_dump(Television::MAX_CHANNERL);
// Television::getMaxCh();
// Television::dispChannel();

// オブジェクトにして呼び出す
$tv = new Television(5);
var_dump($tv); // チャンネル5のテレビオブジェクトが作られる

// 引数を省略した場合
$tv = new Television();
var_dump($tv); 


// コンストラクタを使わずにやると
// $tv = new Television();
// $tv->setChannel(5);