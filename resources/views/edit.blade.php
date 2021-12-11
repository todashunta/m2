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
    <h1>編集</h1>
    <h2>{{ $company->name }}</h2>
    <div>
        <form action="/edit/{{ $company->id }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>name</td>
                    <td>{{ $company->name }}</td>
                    <td><input type="text" placeholder="{{ $company->name }}" name="company_name"></td>
                </tr>
                <tr>
                    <td>address</td>
                    <td>{{ $company->adress }}</td>
                    <td><input type="text" placeholder="{{ $company->adress }}"  name="company_address"></td>
                </tr>
                <tr>
                    <td>tel</td>
                    <td>{{ $company->tel }}</td>
                    <td><input type="text" placeholder="{{ $company->tel }}" name="company_tel"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{ $company->email }}</td>
                    <td><input type="text" placeholder="{{ $company->email }}" name="company_email"></td>
                </tr>
                <tr>
                    <td>remarks</td>
                    <td>{{ $company->remarks }}</td>
                    <td><input type="text" placeholder="{{ $company->remarks }}" name="company_remarks"></td>
                </tr>
            </table>
            <button type="submit">決定</button>
        </form>
    </div>
    @endif
    <a href="/home">リストに戻る</a>
</body>
</html>