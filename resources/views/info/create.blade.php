<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Создание информации</h1>
<div>
    <form action="/info" method="post">
        {{csrf_field()}}
        <div>
            <input type="text" name="phone_number" placeholder="Номер телефона">
        </div>
        <div>
            <input type="text" name="address" placeholder="Адрес">
        </div>
        <div>
            <input type="text" name="email" placeholder="email">
        </div>
        <div>
            <input type="text" name="copyright" placeholder="copyright">
        </div>
        <div>
            <button type="submit">Создать</button>
        </div>
    </form>
</div>

</body>
</html>

