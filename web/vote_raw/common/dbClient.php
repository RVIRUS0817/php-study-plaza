<?php
/**
 * SQLを実行する
 *
 * @param string $sql
 * @throws PDOException
 * @return array|null
 */
function RunSql(string $sql)
{
    try {
        $host = getenv('DATABASE_HOST');
        $db_name = getenv('DATABASE_NAME');
        $db_user = getenv('DATABASE_USER');
        $db_pass = getenv('DATABASE_PASSWORD');
        $dsn = "mysql:host={$host};dbname={$db_name}";
        $db = new PDO($dsn, $db_user, $db_pass);
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
    return $result;
}
