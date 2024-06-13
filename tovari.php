<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        .products-container {
            width: 70%;
            margin: 0 auto;
        }
        .product {
            display: flex;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
            flex-direction: row;
            align-items: center;
        }
        .product img {
            max-width: 150px;
            margin-right: 20px;
        }
        .product-info {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product-title {
            font-weight: bold;
        }
        .product-description {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .add-to-cart {
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="products-container">
        <?php
        session_start();
        require_once("dbconnect.php");

        // Проверяем, что подключение к базе данных установлено
        if ($conn) {
            // Подготовленный запрос для получения данных из таблицы products
            $sql = 'SELECT id, title, description, img FROM products';
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->execute();
                $result = $stmt->get_result();
                $products = $result->fetch_all(MYSQLI_ASSOC);

                // Выводим данные в формате HTML
                if ($products) {
                    foreach ($products as $product) {
                        ?>
                        <div class="product">
                            <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
                            <div class="product-info">
                                <div class="product-title"><?php echo htmlspecialchars($product['title']); ?></div>
                                <div class="product-description"><?php echo htmlspecialchars($product['description']); ?></div>
                                <form method="post" action="add_to_cart.php">
                                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                                    <button type="submit" class="add-to-cart">Добавить в корзину</button>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p>Нет продуктов для отображения.</p>';
                }
                $stmt->close();
            } else {
                echo '<p>Ошибка выполнения запроса: ' . htmlspecialchars($conn->error) . '</p>';
            }
        } else {
            echo '<p>Ошибка подключения к базе данных.</p>';
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
