<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新規登録</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

</head>
<body>
    <header class="site-header text-center">
        <div class="header-content">
            <h1 class="mt-3">LISTENER</h1>
        </div>
    </header>
    <hr>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>新規登録</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/register">
                            <div class="mb-3 text-left"> 
                                <label for="username" class="form-label">ユーザー名</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="ユーザー名を入力">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="email" class="form-label">メールアドレス</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレスを入力">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="password" class="form-label">パスワード</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="パスワードを入力">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="password-confirm" class="form-label">パスワード再確認</label>
                                <input type="password" class="form-control" id="password-confirm" name="password-confirm" placeholder="パスワードを再入力">
                            </div>
                            <div class="text-center"> 
                                <button type="submit" class="btn btn-primary btn-block">入力確認</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#">ログイン画面に戻る</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
