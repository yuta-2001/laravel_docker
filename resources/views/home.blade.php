<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップ画面</title>
</head>
<body>
    <p>こんにちは！</p>
    @if (Auth::check())
        <p>{{ Auth::user()->name }}さん</p>
        <a href="/logout">ログアウト</a>
    @else
        <p>ゲストさん</p>
        <a href="/login">ログイン</a><br><a href="/register">新規登録</a>
    @endif
</body>
</html>