<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>パスワード再設定</title>
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
                        <h2>パスワード再設定</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/reset-password">
                            @csrf 
                            <div class="mb-3 text-left">
                                <label for="new-password" class="form-label">新しいパスワード</label>
                                <input type="password" class="form-control" id="new-password" name="new-password" placeholder="新しいパスワードを入力">
                            </div>
                            <div class="mb-3 text-left">
                                <label for="confirm-password" class="form-label">新しいパスワード確認</label>
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="新しいパスワードを再入力">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">登録</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
