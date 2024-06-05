<?php
$servername = "localhost"; // или адрес вашего сервера
$username = "root"; // имя пользователя базы данных
$password = "root"; // пароль пользователя базы данных
$dbname = "activiti"; // имя вашей базы данных

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['photo']) && isset($_POST['review'])) {
        $photo = $_FILES['photo'];
        $review = $_POST['review'];

        // Путь для сохранения фото
        $uploadDir = 'uploads';
        $uploadFile = $uploadDir . basename($photo['name']);

        // Проверка и загрузка файла
        if (move_uploaded_file($photo['tmp_name'], $uploadFile)) {
            $stmt = $conn->prepare('INSERT INTO reviews (photo, review) VALUES (?, ?)');
            $stmt->bind_param('ss', $uploadFile, $review);

            if ($stmt->execute()) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Ошибка при сохранении данных в базе данных']);
            }

            $stmt->close();
        } else {
            echo json_encode(['success' => false, 'message' => 'Ошибка при загрузке файла']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Неверные данные']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Неверный метод']);
}

$conn->close();
?>