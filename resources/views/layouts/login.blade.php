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
            <div id="middle">
                <p class="users menu-btn"> {{Auth::user()->username}}さん
                    <span class="accordion-title"></span>
                        <div id="item">
                            <img class="Item" src="images/icon1.png">
                        </div>
                </p>
            </div>

            <!-- アコーディオンメニュー -->
            <button type="button" class="menu-btn">
                <span class="inn"></span>
            </button>
            <p id="is-open" class="is-open"></p>
                <nav class="menu">
                    <ul>
                      <li><a class="home" href="/top">HOME</a></li>
                      <li><a class="icon" href="/profile">プロフィール編集</a></li>
                      <li><a class="center" href="/logout">ログアウト</a></li>
                    </ul>
                </nav>
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
                <p>{{Auth::user()->follows()->count()}}名</p>
                </div>
                <p class="list-btn"><a href="/followList">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>{{Auth::user()->followers()->count()}}名</p>
                </div>
                <p class="list-btn"><a href="/followerList">フォロワーリスト</a></p>
            </div>
            <p class="search-btn"><a href="/search">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>
