<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Открытое сохранение пароля в базе данных (не рекомендуется)
    $sql = "INSERT INTO Users (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert("Регистрация успешна");
            window.location.href = 'index.php?content=login.php';
        </script>
        <?php
        exit();
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
       
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <form method="post" action="register.php">
            <h2>Регистрация</h2>
            <label for="username">Имя пользователя</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
