<?php
session_start();
include 'dbconnect.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new_password'])) {
    $new_password = $_POST['new_password'];
    $sql = "UPDATE users SET password='$new_password' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        echo "Пароль успешно изменен";
    } else {
        echo "Ошибка: " . $conn->error;
    }
}
?>

<main>
    <div class="main-container">
        <h2>Личный кабинет</h2>
        <p>Имя пользователя: <?php echo $user['username']; ?></p>
        <form method="post" action="cabinet.php">
            <label for="new_password">Новый пароль</label>
            <input type="password" id="new_password" name="new_password" required>
            <button type="submit">Сменить пароль</button>
        </form>
        <?php if ($user['username'] === 'admin'): ?>
            <a href="?content=admin.php">Перейти к админ панели</a>
        <?php endif; ?>
    </div>
</main>
