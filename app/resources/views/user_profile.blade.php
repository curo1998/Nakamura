<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ユーザー画面</title>
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

    <main class="container mt-5">
        <div class="row">
            <div class="col-md-3 square-container">
                <div class="profile-image-container mb-4 p-3 border border-2 rounded text-center">
                    <img src="path/to/profile-image.jpg" alt="プロフィール画像" class="img-fluid rounded-square">
                </div>
            </div>
            
            <div class="col-md-9">
                <h2>ユーザー名</h2>
                <div class="d-flex mb-3 mt-2 fs-5">
                    <div class="me-4">フォロー: 100</div>
                    <div class="me-4">フォロワー: 200</div>
                    <a href="#" class="text-dark text-decoration-none">アカウント情報編集</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">自己紹介</h5>
                        <p class="card-text">ここに自己紹介文を追加します。好きなことや趣味、興味を書いてください。</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border p-2 mt-5 d-flex justify-content-center">
            <div class="flex-fill text-center me-3 mt-2">
                <h4>作成した投稿</h4>
            </div>
            <div class="flex-fill text-center me-3 mt-2">
                <h4>作成した記事</h4>
            </div>
            <div class="flex-fill text-center me-3 mt-2">
                <h4>いいねした投稿</h4>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
