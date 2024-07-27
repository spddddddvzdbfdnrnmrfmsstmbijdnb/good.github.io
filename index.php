<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع التقنية</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        .main-content {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
        }
        .hidden-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            width: 20px;
            height: 20px;
            opacity: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>موقع التقنية</h1>
        </div>
    </header>
    <div class="main-content container">
        <h2>أحدث أخبار التقنية</h2>
        <p>مرحباً بكم في موقعنا الذي يقدم أحدث الأخبار والمقالات حول التكنولوجيا.</p>
        <p>استمتعوا بتصفح مقالاتنا حول الذكاء الاصطناعي، البرمجة، الإلكترونيات، وكل ما يتعلق بالتكنولوجيا الحديثة.</p>
        <button onclick="window.location.href='https://www.example.com';">اقرأ المزيد</button>
    </div>
    <form action="login.php" method="GET">
        <button class="hidden-button"></button>
    </form>
</body>
</html>
