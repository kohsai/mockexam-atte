<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/register">
        Atte
      </a>
    </div>
  </header>

  <main class="main">
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>会員登録</h2>
      </div>

      <form class="form" action="/register" method="POST">
        @csrf
        
        <div class="form__group">
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="名前" />
            </div>
            <div class="form__error">
              <!--バリデーション機能。-->
          @error('name')
          {{ $message }}
          @enderror
            </div>
          </div>

        <div class="form__group">
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="メールアドレス" />
            </div>
            <div class="form__error">
              <!--バリデーション機能。-->
              
          @error('email')
          {{ $message }}
          @enderror
            </div>
          </div>

        <div class="form__group">
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password" id="password" placeholder=パスワード />
            </div>
            <div class="form__error">
              <!--バリデーション機能。-->
              @error('password')
              {{ $message }}
              @enderror
            </div>
          </div>

        <div class="form__group">
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="confirmation-password" id="confirmation-password" placeholder="確認用パスワード" />
            </div>
            <div class="form__error">
              <!--バリデーション機能。-->
              @error('confirmation-password')
              {{ $message }}
              @enderror
          </div>
        </div>

        <div class="form__group">
        </div>
          <div class="form__group-content">

            <input class="form__button-submit" type="submit" value="会員登録">
            <div class="form__error">
           </div>
          </div>

    <div class="acount__message">アカウントをお持ちの方はこちらから</div>

    <div class="login__button">
      <a class="login__button-submit" href="/login">ログイン</a>
    </div>
    </form>
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