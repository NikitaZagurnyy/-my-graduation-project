<?php
// Параметры подключения к базе данных
$servername = "localhost";
$username = "root"; // Ваше имя пользователя для доступа к базе данных
$password = "root"; // Ваш пароль для доступа к базе данных
$dbname = "activiti"; // Название вашей базы данных

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обработка данных из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST["name"];
    $phoneNumber = $_POST["phoneNumber"];
    $gender = $_POST["gender"];

    // Подготовка и выполнение SQL запроса для вставки данных в таблицу
    $sql = "INSERT INTO coaches (name, phoneNumber, gender) VALUES ('$name', '$phoneNumber', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Закрытие подключения
$conn->close();
?>