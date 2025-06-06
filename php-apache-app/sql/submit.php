<?php
$host = 'db';
$db = getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'] ?? '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $stmt = $pdo->prepare("INSERT INTO messages (content) VALUES (:content");
        $stmt->execute(['content' => $content]);
        echo "메시지가 저장되었습니다!<br>"; 
    } catch (PDOException $e) {
        echo "DB error: " . $e->getMessage();
    }
}

?>

<form method="post" action="submit.app">
    <input type="text" name="content" placeholder="메시지 입력">
    <button type="submit">저장</button>
</form>

<p><a href="list.php">메시지 목록 보기</a></p>