<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Auth::check())
    <form action="/create" method="POST">
        @csrf
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="name"><span>{{ $errors->first('name') }}</span></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="adress"><span>{{ $errors->first('adress') }}</span></td>
            </tr>
            <tr>
                <td>tel</td>
                <td><input type="text" name="tel"><span>{{ $errors->first('tel') }}</span></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"><span>{{ $errors->first('email') }}</span></td>
            </tr>
            <tr>
                <td>remarks</td>
                <td><input type="text" name="remarks"><span>{{ $errors->first('remarks') }}</span></td>
            </tr>
        </table>
        <button type="submit">決定</button>
    </form>
    <a href="/home">リストに戻る</a>
    @else
        <p>ログインしてください</p>
        <a href="/login">ログイン</a>
    @endif
</body>
</html>