<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <p>name</p>
        <input type="text" name="name">
        <p>password</p>
        <input type="text" name="password">
        <button type="submit">ok</button>
    </form>
</body>
</html>