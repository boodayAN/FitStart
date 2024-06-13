<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тренировочные программы</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .tov {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .add-to-cart {
            width: 300px;
        }
    </style>
</head>
<body>
    <main>
        <section id="services">
            <h2>Наши услуги</h2>
            <div class="service-container">
                <div class="service-box">
                    <h3>Персональные тренировки</h3>
                    <p>Индивидуальный подход к каждому клиенту.</p>
                </div>
                <div class="service-box">
                    <h3>Групповые занятия</h3>
                    <p>Тренировки в группах под руководством опытного тренера.</p>
                </div>

            </div>
        </section>

        <h3>Наши товары:</h3>
        <div class="tov">
        <?php
            include 'tovari.php';
        ?>
        </div>
        
        <!-- Блок с отзывами клиентов -->
        <section id="testimonials">
            <h2>Отзывы клиентов</h2>
            <div class="testimonial-container">
                <div class="testimonial-box">
                    <p>"Прекрасная программа для новичков! Уже через месяц почувствовал значительные улучшения."</p>
                    <cite>— Сергей</cite>
                </div>
                <div class="testimonial-box">
                    <p>"Тренеры знают свое дело. Групповые занятия - это не только тренировки, но и мотивация."</p>
                    <cite>— Наталья</cite>
                </div>
            </div>
        </section>
        

    </main>
</body>
</html>
