<?php
session_start();
// Проверка: если сессии нет, выкидываем на вход
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html><body>
    <h2>Личный кабинет</h2>
    <p>Привет, <b><?= $_SESSION['user']['name'] ?></b>!</p>
    <p>Вы успешно вошли в систему.</p>
    <p><a href="logout.php">Выйти</a></p>
</body></html>