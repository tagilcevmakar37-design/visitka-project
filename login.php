<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Простая проверка для теста (логин: admin, пароль: 123)
    if ($_POST['login'] === 'admin' && $_POST['pass'] === '123') {
        // Записываем данные в сессию
        $_SESSION['user'] = ['id' => 1, 'name' => 'admin'];
        header('Location: profile.php');
        exit;
    } else {
        $error = 'Неверный логин или пароль';
    }
}
?>
<!DOCTYPE html>
<html><body>
    <h2>Вход в личный кабинет</h2>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post">
        <p>Логин: <input name="login" required></p>
        <p>Пароль: <input name="pass" type="password" required></p>
        <button>Войти</button>
    </form>
</body></html>