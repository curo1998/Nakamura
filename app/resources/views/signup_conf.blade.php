<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新規登録確認</title>

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
                        <h2>新規登録確認</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/register-confirm">
                            <div class="mb-3 text-left"> 
                                <label for="username" class="form-label">ユーザー名</label>
                                <p id="username"></p>
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="email" class="form-label">メールアドレス</label>
                                <p id="email"></p>
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="password" class="form-label">パスワード</label>
                                <p id="password"></p>
                            </div>
                            <div class="text-center"> 
                                <button type="submit" class="btn btn-primary btn-block">登録</button>
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
    <script>        
        var username = sessionStorage.getItem('username');
        var email = sessionStorage.getItem('email');
        var password = sessionStorage.getItem('password');

        document.getElementById('username').textContent = username;
        document.getElementById('email').textContent = email;
        document.getElementById('password').textContent = password;
    </script>
</body>
</html>
