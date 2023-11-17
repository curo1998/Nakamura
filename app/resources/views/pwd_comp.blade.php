<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>パスワード再設定完了</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        body {
            display: flex;
            min-height: 80vh;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header class="site-header text-center">
        <div class="header-content">
            <h1 class="mt-3">LISTENER</h1>
        </div>
    </header>
    <hr>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2>パスワードの再設定が完了しました。</h2>
                    <a href="/login" class="btn btn-primary btn-lg mt-3">ログイン画面へ</a>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
