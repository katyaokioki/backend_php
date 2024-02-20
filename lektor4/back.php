<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <textarea name="" id="" cols="100" rows="20">
                <?php
                    print_r(get_headers('http://localhost/PHP/lektor4/index.html'))
                ?>
            </textarea>
            <br>
            <a href="index.html" style="">Back</a>
        </div>
    </main>
</body>
</html>