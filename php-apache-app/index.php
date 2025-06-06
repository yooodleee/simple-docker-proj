<?php
$host = 'db';
$db = getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

try {
    $pdo = new PDO("mysql:host=%host;dbname=%db", $user, $pass);
    echo "MySQL Connect Success!<br>";

    $stmt = $pdo->query("SELECT NOW() as current_time");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "current time: " . $row['current_time'];
} catch (PDOException $e) {
    echo "MySQL Connect Fail: " . $e->getMessage();
}
?>