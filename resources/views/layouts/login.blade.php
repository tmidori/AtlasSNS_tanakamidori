<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
</head>
<body>
    <header>
        <div id = "head">
          <h1><a href="/top"><img class="topIcon" src="images/atlas.png"></a></h1>
          <div class="side_user">
            <div id='accordion' class="accordion-container">
                <!-- Auth::user(); 現在ログインしているユーザー情報の取得 -->
                <p>{{Auth::user()->username}}さん<img class="Item" src="images/icon1.png"></p>
                <div class='accordion-title jas-accordion-title'>
                    <ul class="menu">
                      <li><a class="home" href="/top">HOME</a></li>
                      <li><a class="icon" href="/profile">プロフィール編集</a></li>
                      <li><a class="center" href="/logout">ログアウト</a></li>
                    </ul>
                </div>
            </div>
          </div>

        </div>
    </header>

    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>{{Auth::user()->username}}さんの</p>
                <div>
                <p>フォロー数</p>
                <p>名</p>
                </div>
                <p class="list-btn"><a href="/followList">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>名</p>
                </div>
                <p class="list-btn"><a href="/followerList">フォロワーリスト</a></p>
            </div>
            <p class="search-btn"><a href="/search">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>
