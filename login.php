<?php
session_start();
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['id'];
            header("Location: index.php");
            exit();
        } else {
            echo "<script>
                    alert('Неверный пароль');
                    window.location.href = 'index.php?content=login.php';
                  </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('Пользователь не найден');
                window.location.href = 'index.php?content=login.php';
              </script>";
        exit();
    }
}
?>

<main>
    <div class="form-container">
        <form method="post" action="login.php">
            <h2>Войти</h2>
            <label for="username">Имя пользователя</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Войти</button>
        </form>
    </div>
</main>
