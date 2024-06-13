<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мотивация и психология</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .main-container {
            padding: 20px;
        }
        
        .motivation-tips {
            background-color: #fffde7;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .motivation-tips ul {
            list-style-type: circle;
            margin-left: 20px;
        }
        
        .success-stories {
            background-color: #e0f7fa;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .success-stories .story-item {
            margin-bottom: 15px;
        }
        
        .video-interviews {
            margin-top: 20px;
        }
        
        .self-development-books {
            background-color: #f1f8e9;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .self-development-books .book-item {
            margin-bottom: 15px;
        }

    </style>
</head>
<body>
    <div class="main-container">
        <h2>Мотивация и психология</h2>
        <p>Статьи о мотивации, развитии уверенности в себе, преодолении трудностей и формировании здоровых привычек.</p>

        <!-- Советы по мотивации -->
        <div class="motivation-tips">
            <h3>Советы по мотивации</h3>
            <ul>
                <li>Ставьте реальные цели и разбивайте их на маленькие шаги</li>
                <li>Вознаграждайте себя за достижения</li>
                <li>Создайте поддерживающую среду</li>
                <li>Ведите дневник успехов</li>
            </ul>
        </div>

        <!-- Видео-обзор -->
        <h3>Советы по мотивации от уважаемого тренера</h3>
        <div class="video-overview">
            <video width="auto" height="400px" controls>
                <source src="../FitStart/video/motivacia.mp4" type="video/mp4">
                Ваш браузер не поддерживает тег видео.
            </video>
        </div>

        <!-- Истории успеха -->
        <div class="success-stories">
            <h3>Истории успеха</h3>
            <div class="story-item">
                <h4>История Алексея</h4>
                <p>Алексей преодолел свои страхи и начал заниматься спортом. Сегодня он участвует в марафонах и чувствует себя великолепно.</p>
            </div>
            <div class="story-item">
                <h4>История Марии</h4>
                <p>Мария потеряла 20 кг за год, следуя простым советам и занимаясь регулярно. Она теперь помогает другим достигать своих целей.</p>
            </div>
        </div>

        <!-- Книги по саморазвитию -->
        <div class="self-development-books">
            <h3>Книги по саморазвитию</h3>
            <div class="book-item">
                <h4>“Сила привычки” - Чарльз Дахигг</h4>
                <p>Эта книга объясняет, как формировать полезные привычки и избавляться от вредных.</p>
            </div>
            <div class="book-item">
                <h4>“Думай и богатей” - Наполеон Хилл</h4>
                <p>Классическое руководство по достижению успеха в любых начинаниях.</p>
            </div>
        </div>
    </div>
</body>
</html>
