<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Management</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
          Attendance Management
        </a>
        <nav>
          <ul class="header-nav">
{{-- ログイン状態に応じた表示の変更

ログアウトは、ログイン済みのユーザーのみに提供する機能です。そのため、ログイン済みの場合のみ表示するよう設定しましょう。
機能	　　　　　説明
Auth::check()	ログイン状態の判定をする。　　　　ログイン済みの場合はTrueを返す。 --}}
            @if(Auth::check())
            <li class="header-nav__item">
              <a class="header-nav__link" href="/mypage">マイページ</a>
            </li>
            <li class="header-nav__item">
{{-- formタグのaction属性とmethod属性を指定して、/logoutにリクエストを飛ばす。 --}}
              <form class="form" action="/logout" method="POST">
                <button class="header-nav__button">ログアウト</button>
              </form>
            </li>
            @endif
{{-- ログイン済み（Auth::check()がtrue）の場合のみ、マイページ遷移ボタンとログアウトボタンが表示されるようになりました。 --}}
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
