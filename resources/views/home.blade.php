<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム画面</title>
</head>
<body>
    <h1>プロフィール</h1>
    <p>名前: {{ auth()->user()->name }}</p>
    <p>アドレス: {{ auth()->user()->email }}</p>
    
    <!-- ログアウトフォーム -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
</body>
</html>
