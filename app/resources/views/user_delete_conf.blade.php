<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アカウント削除確認</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    <header class="bg-white text-dark py-3 d-flex justify-content-between align-items-center border-bottom border-2">
        <span class="fs-2 ms-5">LISTENER</span>
        <nav class="d-flex me-3">
            <a href="/" class="text-dark text-decoration-none fs-5 mx-4">ホーム画面</a>
            <a href="/board" class="text-dark text-decoration-none fs-5 mx-4">掲示板</a>
            <a href="/user" class="text-dark text-decoration-none fs-5 mx-4">ユーザー画面</a>
            <a href="/logout" class="text-dark text-decoration-none fs-5 mx-4">ログアウト</a>
        </nav>
    </header>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="mt-2">アカウント削除確認</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 text-left">
                            <strong>ユーザー名:</strong> 現在のユーザー名
                        </div>
                        <div class="mb-3 text-left">
                            <strong>メールアドレス:</strong> 現在のメールアドレス
                        </div>
                        <div class="mb-3 text-left">
                            <strong>パスワード:</strong> 現在のパスワード
                        </div>
                        <div class="mb-3 text-left">
                            <strong>アイコン画像:</strong> 現在のアイコン
                        </div>
                        <div class="mb-3 text-left">
                            <strong>プロフィール文:</strong> 現在のプロフィール文
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/edit-account" class="mx-2">編集画面に戻る</a> 
                        <a href="#" class="mx-2">アカウントを削除する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
