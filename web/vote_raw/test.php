<?php // PHPでかこまなければ純粋なHTML 
?>
<h2>PHP Starter KitM</h2>
<p>空前絶後の超絶怒涛のPHP環境</p>

<?php
try {
    $host = getenv('DATABASE_HOST');
    $db_name = getenv('DATABASE_NAME');
    $db_user = getenv('DATABASE_USER');
    $db_pass = getenv('DATABASE_PASSWORD');

    $dsn = "mysql:host={$host};dbname={$db_name}";
    $db = new PDO($dsn, $db_user, $db_pass);

    $sql = "SELECT * FROM vote_counts";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
?>