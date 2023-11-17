<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ホーム画面</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

    <main class="container mt-5 text-center">
        <h1 class="mb-0 me-3 align-items-center w-100">ホーム画面</h1>

        <div class="container mt-5 d-flex justify-content-center">
            <button class="btn btn-primary mx-3">投稿を作成する</button>

            <div class="card w-50 p-3">
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control flex-grow-1 me-1" placeholder="検索ワードを入力">
                    <button class="btn btn-primary flex-shrink-0">検索</button>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
