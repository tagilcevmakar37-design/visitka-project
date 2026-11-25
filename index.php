<?php
$host = 'localhost';
$db   = 'visitka_db';
$user = 'root';
$pass = ''; // В OpenServer пароль пустой

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Онлайн-библиотека Читальня — читать книги бесплатно</title>
    <meta name="description" content="Сайт-визитка онлайн-библиотеки Читальня. Доступ к электронному каталогу книг.">
    <link rel="canonical" href="http://visitka/" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Главная страница - Добро пожаловать!</h1>
    <p>База данных visitka_db подключена.</p>
    <p><img src="image.jpg" alt="Обложка книги" width="300"></p>
</body>
</html>