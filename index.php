<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitStart: Советы для новичков в тренажерном зале</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="osn">
<?php include 'header.php'; ?>
    <div class="main-container">
        <?php
        if(isset($_GET['content'])){
            $content = $_GET['content'];
            include "$content";
        } 
        else {
            ?>
            <h2>Добро пожаловать на FitStart</h2>
            <div class="info-blocks">
                <div class="info-block">
                    <h3>Принципы тренировок</h3>
                    <p>Узнайте основные принципы эффективных тренировок и как избежать распространенных ошибок.</p>
                </div>
                <div class="info-block">
                    <h3>Техника выполнения упражнений</h3>
                    <p>Инструкции по правильному выполнению упражнений для максимальной эффективности.</p>
                </div>
                <div class="info-block">
                    <h3>Питание и диета</h3>
                    <p>Советы по правильному питанию и планированию диеты для достижения ваших целей.</p>
                </div>
                <div class="info-block">
                    <h3>Мотивация и психология</h3>
                    <p>Научитесь поддерживать мотивацию и развивать здоровые привычки.</p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    
</div>

<?php include 'footer.php'; ?>
    
    
</body>
</html>
