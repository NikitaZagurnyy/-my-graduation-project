<?php
header('Content-Type: application/json');

$servername = "localhost"; // или адрес вашего сервера
$username = "root"; // имя пользователя базы данных
$password = "root"; // пароль пользователя базы данных
$dbname = "activiti"; // имя вашей базы данных

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query('SELECT photo, review FROM reviews');

$reviews = [];
while ($row = $result->fetch_assoc()) {
    $reviews[] = $row;
}

echo json_encode($reviews);

$conn->close();
?>