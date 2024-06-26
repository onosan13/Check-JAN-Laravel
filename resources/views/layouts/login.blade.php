<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Check-JAN @yield('title')</title>
        <meta name="description" content="麻雀の点数計算を行うサイトです。">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/style_2.css">
        <link rel="icon" type="image/png" href="img/favicon.ico">
    </head>
    <body>

        <header>
            <div class="header-container">
                <div class="header-left">
                    <div class="header-title">
                        <h2>Check JAN</h2>
                        <div class="header-logo">
                            <img src="/img/main-rogo.png" alt="ロゴ">
                        </div>
                        <p>～麻雀点数計算サイト～</p>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="header-nav">
                        <li><a href="/">トップへ</a></li>
                    </ul>
                </div>
            </div>
        </header>

        @yield('contents')

        <footer>
            <div class="footer-container">
                <div class="footer-title">
                    <h2>Check JAN</h2>
                    <div class="footer-logo">
                        <img src="/img/main-rogo.png" alt="ロゴ">
                    </div>
                    <p>～麻雀点数計算サイト～</p>
                </div>
            </div>
        </footer>
        
    </body>
</html>
