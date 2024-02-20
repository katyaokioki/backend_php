<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Moscow Polytechnic University">
        <h1>Feedback Form Results</h1>
    </header>
    <main>
        <textarea id="headersResults" rows="10" cols="50" readonly>
        <?php
        $url = 'http://www.example.com';
        print_r(get_headers($url));
        ?>
        </textarea>
    </main>
    <footer>
    </footer>
</body>
</html>
