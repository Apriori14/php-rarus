
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Проверка количества скобок</h1>

    <script>
        let string = prompt('Введите выражение', );
        let array = string.split('')
        let result = 0
        for (let i = 0; i <= string.length - 1; i++) {
            if (string[i] == '(') result++
            else if (string[i] == ')') result--
            if (result < 0) break;
        }
        console.log(result)
        if (result === 0) alert('Расстановка скобок корректна')
        else alert('Расстановка скобок некорректна')
    </script>

</body>
</html>