<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <Div class="header__inner">
      <a class="header__logo" href="/">
        Atte
      </a>


    <div class="nav">
    <a href="/">ホーム</a>
    <a href="/attendance">日付一覧</a>
    <a href="/login">ログアウト</a>
  </div>
</div>
</header>



<main>
    <main class="main">
    <div class="index-form__content">
      <div class="index-form__heading">
        <h2>{{ Auth::user()->name}}さんお疲れ様です！</h2>
      </div>
    </div>


      <div class="container">
            <div class="item">
              <a class="index__link" href="/">勤務開始</a>
            </div>

            <div class="item">
              <a class="index__link" href="/">勤務終了</a>
            </div>

            <div class="item">
              <a class="index__link" href="/">休憩開始</a>
            </div>

            <div class="item">
              <a class="index__link" href="/">休憩終了</a>
            </div>
      </div>
      
     </main>
    </main>


    <footer>
      <footer class="footer">
        <div class="footer__inner">
         <div class="footer__logo">
        Atte, inc.
         </div>
        </div>
      </footer>
    </footer>
</body>

</html>