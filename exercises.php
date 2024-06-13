<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Упражнения и техника</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
    <div class="main-container">
        <h2>Упражнения и техника</h2>
        <p>Инструкции и видеоуроки по базовым упражнениям с гантелями, штангой и на тренажерах. Обучение правильной технике выполнения упражнений.</p>
        <?php
        include 'exer.php';
        ?>
    </div>
</body>
</html>
