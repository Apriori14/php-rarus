<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Форма обратной связи</title>
</head>
<body>
    <h1>Форма обратной связи</h1>
    <form action="mail.php" method="post" class="form">
        <textarea class="textarea" name="comment" id="" cols="30" rows="10" placeholder="комментарий"></textarea>
        <input type="text" name="name" class="input" placeholder="ФИО" required>
        <input type="text" name="addr" class="input" placeholder="адрес">
        <input type="email" name="email" class="input" placeholder="email">
        <input type="tel" name="tel" class="input" placeholder="мобильный телефон" required>
        <input type="file" class="file">
        <input type="submit" value="Отправить сообщение" class="btn">
    </form>
</body>
</html>