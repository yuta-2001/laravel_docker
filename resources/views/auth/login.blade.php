<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>
</head>
<body>
    @isset($errors)
        <p style="color: red">{{ $errors->first('message') }}</p>
    @endisset
    <form name="loginform" actoin="login" method="post">
        @csrf
        <dl>
            <dt>メールアドレス:</dt>
            <dd><input type="text" name="email" size="30" value="{{ old('email') }}" /></dd>
        </dl>
        <dl>
            <dt>パスワード:</dt>
            <dd><input type="password" name="password" size="30" value="{{ old('password') }}" /></dd>
        </dl>
        <button type="submit" name="action" value="send">送信</button>
    </form>
</body>
</html>