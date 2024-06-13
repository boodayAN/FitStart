<?php
session_start();
require_once("dbconnect.php");

if ($conn) {
    if (isset($_POST['product_id'])) {
        $product_id = intval($_POST['product_id']);

        // Пример запроса для добавления в корзину (предполагая, что у вас есть таблица cart)
        $sql = "INSERT INTO cart (user_id, product_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $user_id = $_SESSION['user_id']; // Предполагая, что user_id хранится в сессии
            $stmt->bind_param("ii", $user_id, $product_id);
            $stmt->execute();
            echo "<script>
                    alert('Товар успешно добавлен в корзину.');
                  </script>";
            // Перенаправление обратно на страницу продуктов после добавления в корзину
            header("Location: index.php?content=content.php");
            exit();
        } else {
            echo '<p>Ошибка выполнения запроса: ' . htmlspecialchars($conn->error) . '</p>';
        }
    } 
} else {
    echo '<p>Ошибка подключения к базе данных.</p>';
}

$conn->close();
?>
