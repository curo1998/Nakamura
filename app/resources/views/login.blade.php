<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ログイン</title>

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
                        <h2>ログイン</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3 text-left"> 
                                <label for="email" class="form-label">メールアドレス</label>
                                <input type="email" class="form-control" id="email" placeholder="メールアドレスを入力">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="password" class="form-label">パスワード</label>
                                <input type="password" class="form-control" id="password" placeholder="パスワードを入力">
                            </div>
                            <div class="text-center"> 
                                <button type="submit" class="btn btn-primary btn-block">ログイン</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#">新規登録</a> | <a href="#">パスワードを忘れた場合</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
