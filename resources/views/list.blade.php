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
        <a href="/logout">ログアウト</a>
        <a href="/create">新規登録</a>
        <table>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->adress }}</td>
                    <td>{{ $company->tel }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->remarks }}</td>
                    <td><a href="/edit/{{ $company->id }}">編集</a></td>
                </tr>
            @endforeach
        </table>
    @else
        <p>ログインしてください</p>
        <a href="/login">ログイン</a>
    @endif
</body>
</html>