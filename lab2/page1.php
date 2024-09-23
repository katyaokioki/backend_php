<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Moscow Polytechnic University">
        <h1>Feedback Form</h1>
    </header>
    <main>
        <form action="process.php" method="post">
            <label for="name">Имя пользователя:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">E-mail пользователя:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="type">Тип обращения:</label>
            <select id="type" name="type">
                <option value="complaint">Жалоба</option>
                <option value="proposal">Предложение</option>
                <option value="gratitude">Благодарность</option>
            </select><br>

            <label for="message">Текст обращения:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <input type="checkbox" id="sms" name="sms" value="sms">
            <label for="sms">СМС</label>
            <input type="checkbox" id="emailCheck" name="emailCheck" value="email">
            <label for="emailCheck">E-mail</label><br>

            <button type="submit">Отправить</button>
        </form>
        <a href="page2.php">Перейти на вторую страницу</a>
    </main>
    <footer>
    </footer>
</body>
</html>
