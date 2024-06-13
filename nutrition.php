<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Питание и диета</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .main-container {
            padding: 20px;
        }
        
        .nutrition-tips {
            background-color: #e8f5e9;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .nutrition-tips ul {
            list-style-type: square;
            margin-left: 20px;
        }
        
        .sample-meal-plan {
            background-color: #fff3e0;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .sample-meal-plan table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .sample-meal-plan th, .sample-meal-plan td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        .sample-meal-plan th {
            background-color: #f2f2f2;
            text-align: left;
        }
        
        .video-tips {
            margin-top: 20px;
        }
        
        .popular-recipes {
            background-color: #e3f2fd;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .popular-recipes .recipe-item {
            margin-bottom: 15px;
        }
        
        .popular-recipes .recipe-item h4 {
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
    <div class="main-container">
        <h2>Питание и диета</h2>
        <p>Советы по правильному питанию для достижения результатов, примеры рационов, информация о важности белков, углеводов и жиров.</p>

        <!-- Советы по правильному питанию -->
        <div class="nutrition-tips">
            <h3>Советы по правильному питанию</h3>
            <ul>
                <li>Питайтесь регулярно, не пропускайте приемы пищи</li>
                <li>Включайте в рацион больше овощей и фруктов</li>
                <li>Потребляйте достаточно белка для восстановления мышц</li>
                <li>Ограничьте потребление сахара и насыщенных жиров</li>
            </ul>
        </div>

        <!-- Пример рациона на день -->
        <div class="sample-meal-plan">
            <h3>Пример рациона на день</h3>
            <table>
                <tr>
                    <th>Прием пищи</th>
                    <th>Пример блюда</th>
                </tr>
                <tr>
                    <td>Завтрак</td>
                    <td>Овсяная каша с фруктами и орехами</td>
                </tr>
                <tr>
                    <td>Обед</td>
                    <td>Куриное филе с киноа и овощами</td>
                </tr>
                <tr>
                    <td>Ужин</td>
                    <td>Рыба на пару с овощным салатом</td>
                </tr>
                <tr>
                    <td>Перекусы</td>
                    <td>Йогурт, орехи, свежие фрукты</td>
                </tr>
            </table>
        </div>

        <!-- Популярные рецепты -->
        <div class="popular-recipes">
            <h3>Популярные рецепты</h3>
            <div class="recipe-item">
                <h4>Смузи с ягодами и овсянкой</h4>
                <p>Ингредиенты: ягоды, овсянка, банан, йогурт.</p>
            </div>
            <div class="recipe-item">
                <h4>Куриное филе с киноа</h4>
                <p>Ингредиенты: куриное филе, киноа, овощи.</p>
            </div>
            <div class="recipe-item">
                <h4>Салат с тунцом и авокадо</h4>
                <p>Ингредиенты: тунец, авокадо, салатные листья, оливковое масло.</p>
            </div>
        </div>
    </div>
</body>
</html>
