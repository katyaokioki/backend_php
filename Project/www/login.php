<?php
session_start(); // Запускаем сессию

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Подключаемся к базе данных
    $pdo = new PDO('mysql:host=localhost;dbname=article-321', 'root', '');

    // Подготовка и выполнение запроса для получения пользователя по email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Проверка, найден ли пользователь и правильный ли пароль
    if ($user && password_verify($password, $user['password'])) {
        // Успешная авторизация
        $_SESSION['user_id'] = $user['id']; // Сохраняем ID пользователя в сессии
        $_SESSION['nickname'] = $user['nickname']; // Сохраняем никнейм (или другие данные по желанию)
        
        header('Location: /'); // Перенаправление на главную страницу или другую нужную страницу
        exit;
    } else {
        echo '<p class="text-danger">Неверный email или пароль.</p>'; // Сообщение об ошибке
    }
}
?>





<?php require(__DIR__ . '/../templates/header.php'); ?>

<div class="container mt-5">
    <h2>Авторизация</h2>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>

<?php require(__DIR__ . '/../templates/footer.php'); ?>