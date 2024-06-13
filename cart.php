<?php
session_start();
require_once("dbconnect.php");

if (!isset($_SESSION['user_id'])) {
    die("Пользователь не авторизован.");
}

$user_id = $_SESSION['user_id'];

// Запрос для получения данных о товарах в корзине
$query = "
    SELECT Products.id, Products.title, Products.img, Products.price
    FROM Cart
    JOIN Products ON Cart.product_id = Products.id
    WHERE Cart.user_id = ?
";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Вычисление общей суммы заказа
$total_query = "
    SELECT SUM(Products.price) as total
    FROM Cart
    JOIN Products ON Cart.product_id = Products.id
    WHERE Cart.user_id = ?
";
$total_stmt = $conn->prepare($total_query);
$total_stmt->bind_param("i", $user_id);
$total_stmt->execute();
$total_result = $total_stmt->get_result();
$total_row = $total_result->fetch_assoc();
$total_price = $total_row['total'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['clear_cart'])) {
    $query = "DELETE FROM Cart WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    if ($stmt->execute()) {
        $_SESSION['message'] = "Корзина очищена.";
        header("Location: index.php?content=cart.php");
        exit();
    } else {
        echo "Ошибка при очистке корзины: " . $conn->error;
    }
}
if (isset($_SESSION['sell']) && $_SESSION['sell'] == true) {
    ?>
    <script>
        alert('Спасибо за покупку!');
    </script>
    <?php
    $_SESSION['sell'] = false;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        main {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.cart h1 {
    text-align: center;
    color: #343a40;
}

.cart .prod_cart {
    display: flex;
    align-items: center;
    margin: 20px 0;
    padding: 10px;
    border-bottom: 1px solid #e9ecef;
}

.cart .prod_cart img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
    margin-right: 20px;
}

.cart .prod_cart div {
    flex: 1;
}

.cart .prod_cart h2 {
    margin: 0 0 10px;
    color: #495057;
}

.cart .prod_cart p {
    margin: 0;
    color: #6c757d;
}

.cart strong {
    display: block;
    text-align: right;
    margin-top: 20px;
    font-size: 1.2em;
    color: #212529;
}

.cart a, form {
    display: inline-block;
    width: 100%;
    text-align: center;
}

.cart input[type="button"], input[type="submit"] {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin: 10px 0;
    font-size: 1em;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cart input[type="button"]:hover, input[type="submit"]:hover {
    background-color: #218838;
}

.cart @media (max-width: 600px) {
    .prod_cart {
        flex-direction: column;
        align-items: flex-start;
    }

    .prod_cart img {
        margin-bottom: 10px;
    }

    strong {
        text-align: left;
    }
}
    </style>
</head>
<body>
    <main>
        <div class="cart">
            <h1>Корзина</h1>
            <?php if ($result->num_rows > 0): ?>
                <?php $item_num = 1; ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="prod_cart">
                        <span><?php echo $item_num++; ?>.</span>
                        <img src="<?php echo $row['img']; ?>" alt="<?php echo $row['title']; ?>">
                        <div>
                            <h2><?php echo $row['title']; ?></h2>
                            <p>Цена: <?php echo $row['price']; ?> руб.</p>
                        </div>
                    </div>
                <?php endwhile; ?>
                <p><strong>Общая сумма: <?php echo $total_price; ?> руб.</strong></p>
                <a href="checkout.php"><input type="button" value="Оформить заказ"></a>
                <form action="cart.php" method="POST">
                    <input type="hidden" name="clear_cart" value="1">
                    <input type="submit" value="Очистить корзину">
                </form>
            <?php else: ?>
                <p>Ваша корзина пуста.</p>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
