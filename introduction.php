<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Введение в тренировки</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .main-container {
            padding: 20px;
        }
        
        .benefits {
            background-color: #f0f8ff;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .benefits ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        
        .video-overview {
            margin-top: 20px;
        }
        
        .testimonials {
            background-color: #fffbe6;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .testimonials blockquote {
            font-style: italic;
            margin: 10px 0;
        }
        
        .gallery {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        
        .gallery-item img {
            width: auto;
            height: 400px;
            border-radius: 8px;
        }

    </style>
</head>
<body>
    <div class="main-container">
        <h2>Введение в тренировки</h2>
        <p>Основные принципы тренировок, понятия, с которыми новички должны быть знакомы.</p>

        <!-- Блок с преимуществами тренировок -->
        <div class="benefits">
            <h3>Преимущества тренировок</h3>
            <ul>
                <li>Улучшение здоровья и самочувствия</li>
                <li>Повышение выносливости и силы</li>
                <li>Снижение уровня стресса</li>
                <li>Укрепление иммунной системы</li>
            </ul>
        </div>

        <!-- Отзывы клиентов -->
        <div class="testimonials">
            <h3>Отзывы наших клиентов</h3>
            <blockquote>
                <p>"Занимаюсь в этом зале уже год, результаты превзошли ожидания!"</p>
                <cite>- Анна</cite>
            </blockquote>
            <blockquote>
                <p>"Отличное оборудование и дружелюбная атмосфера. Рекомендую всем."</p>
                <cite>- Иван</cite>
            </blockquote>
        </div>

        <!-- Галерея -->
        <h3>Галерея</h3>
        <div class="gallery">
            
            <div class="gallery-item">
                <img src="images/tr1.jpg" alt="Тренажерный зал 1">
            </div>
            <div class="gallery-item">
                <img src="images/tr2.jpg" alt="Тренажерный зал 2">
            </div>
            <div class="gallery-item">
                <img src="images/tr3.jpg" alt="Тренажерный зал 3">
            </div>
        </div>
    </div>
</body>
</html>
