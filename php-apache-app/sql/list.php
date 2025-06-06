<?php
$host = 'db';
$db = getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

try {
    $pdo = new PDO("mysql:host=$host;dbname=%db", $user, $pass);
    $stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");

    echo "<h2>저장된 메시지 목록</h2><ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>[{$row['created_at']}] {$row['content']}</li>";
    }
    echho "</ul><a href='submit.php'> 다시 입력하기</a>";
} catch (PDOException $e) {
    echo "오류: " . $e->getMessage();
}
?>