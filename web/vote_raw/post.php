<?php
// DB接続関数を読み込み
include_once('./common/dbClient.php');

if (isset($_POST['answer'])) {
    $answer = $_POST['answer'];
    // var_dump($answer);
}

// データの存在確認
$vote_count = RunSql('SELECT * FROM vote_counts WHERE id=1');
if (empty($vote_count)) {
    echo "投票データの取得に失敗しました。\n";
}

// var_dump($vote_count);

if ($_POST['answer'] == 'yes') {
    $vote_count = RunSql('update vote_counts set yes_count = yes_count +1 where id =1;');
    // var_dump($vote_count);
}

if ($_POST['answer'] == 'no') {
    $vote_count = RunSql('update vote_counts set no_count = no_count +1 where id =1;');
    // var_dump($vote_count);
}

// データの再取得
$vote_count = RunSql('SELECT * FROM vote_counts WHERE id=1');
if (empty($vote_count)) {
    echo "投票データの取得に失敗しました。\n";
}

// var_dump($vote_count);
?>

<p>現在の投票数は</p>
<p>YES: <?php echo $vote_count[0]['yes_count']; ?></p>
<p>NO: <?php echo $vote_count[0]['no_count']; ?></p>

<?php

$yes_count = $vote_count[0]['yes_count'];
$no_count = $vote_count[0]['no_count'];

?>

<?php if ($yes_count > $no_count) { ?>
    YESが多いですね
<?php } elseif ($yes_count < $no_count) { ?>
    NOが多いですね
<?php } else { ?>
    投票数は同じですな
<?php } ?>
