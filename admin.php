<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        .admin-panel {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .admin-panel h1 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <h1>Админ-панель</h1>
        <?php
        include 'dbconnect.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $image = $_FILES['image']['name'];
            $imagePath = 'images/' . basename($image);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
            
            // Проверка на существование изображения
            if (file_exists($imagePath)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Проверка размера файла (не более 5MB)
            if ($_FILES["image"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Допустимые форматы изображений
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Проверка $uploadOk
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                    // Подготовленный запрос для вставки данных в таблицу products
                    $sql = 'INSERT INTO products (title, description, img) VALUES (?, ?, ?)';
                    $stmt = $conn->prepare($sql);
                    if ($stmt) {
                        $stmt->bind_param("sss", $title, $description, $imagePath);
                        if ($stmt->execute()) {
                            echo "Товар добавлен.";
                        } else {
                            echo "Error: " . $stmt->error;
                        }
                        $stmt->close();
                    } else {
                        echo "Error: " . $conn->error;
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Картинка</label>
                <input type="file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <button type="submit">Добавить товар</button>
            </div>
        </form>
    </div>
</body>
</html>
