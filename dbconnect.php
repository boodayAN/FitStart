<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitstart";

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
