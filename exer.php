<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Выбор упражнений</title>
    <style>
        ul { list-style-type: none; padding: 0; }
        .muscle-group {
            border: 1px solid #000;
            padding: 20px;
            margin: 20px auto;
            text-align: center;
            text-decoration: none;
            color: black;
            display: block;
            width: 80%;
            border-radius: 10px;
        }
        .muscle-group:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Выберите группу мышц</h1>
    <ul>
        <li>
            <a href="?content=spina.php" class="muscle-group">
                <h2>Спина</h2>
                <p>Упражнения для укрепления мышц спины.</p>
            </a>
        </li>
        <li>
            <a href="?content=grud.php" class="muscle-group">
                <h2>Грудь</h2>
                <p>Упражнения для тренировки грудных мышц.</p>
            </a>
        </li>
        <li>
            <a href="?content=ruki.php" class="muscle-group">
                <h2>Руки</h2>
                <p>Упражнения для бицепсов и трицепсов.</p>
            </a>
        </li>
        <li>
            <a href="?content=nogi.php" class="muscle-group">
                <h2>Ноги</h2>
                <p>Упражнения для тренировки ног.</p>
            </a>
        </li>
    </ul>
</body>
</html>
