<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アカウント情報編集画面</title>
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
        <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="mt-2">アカウント情報編集</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/edit-account">
                            <div class="mb-3 text-left"> 
                                <label for="username" class="form-label">ユーザー名</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="ユーザー名を入力" value="現在のユーザー名">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="email" class="form-label">メールアドレス</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレスを入力" value="現在のメールアドレス">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="password" class="form-label">新しいパスワード</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="新しいパスワードを入力">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="password-confirm" class="form-label">新しいパスワード確認</label>
                                <input type="password" class="form-control" id="password-confirm" name="password-confirm" placeholder="新しいパスワードを再度入力">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="icon" class="form-label">アイコン画像</label>
                                <input type="file" class="form-control" id="icon" name="icon">
                            </div>
                            <div class="mb-3 text-left"> 
                                <label for="profile" class="form-label">プロフィール文</label>
                                <textarea class="form-control" id="profile" name="profile" placeholder="プロフィール文を入力"></textarea>
                            </div>
                            <div class="text-center"> 
                                <button type="submit" class="btn btn-primary btn-block">編集内容を確定</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center" >
                        <a href="#" class="mx-2">戻る</a> 
                        <a href="#" class="mx-2">アカウントを削除する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
