<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
<header class="header">
    <div class="header__inner">
    <a class="header__logo" href="/login">
                Atte
    </a>
    </div>
</header>


<main>
    <div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>ログイン</h2>
    </div>

<form class="form" action="/login" method="POST">
@csrf

    <div class="form__group">
        <span class="form__label--item"></span>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
        <input type="email" name="email" placeholder="メールアドレス" />
        </div>
    <div class="form__error">
    <!--バリデーション機能を実装したら記述します。-->
    </div>
    </div>


<div class="form__group">
<span class="form__label--item"></span>
</div>
    <div class="form__group-content">
    <div class="form__input--text">
    <input type="password" name="password" placeholder="パスワード" />
    </div>
    <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
    </div>
    </div>

    <div class="form__group">
     <span class="form__label--item"></span>
    </div>
     <div class="form__group-content">
      <input class="form__button-submit" type="submit" value="ログイン">
     <div class="form__error">
     <!--バリデーション機能を実装したら記述します。-->
     </div>
     </div>

    <div class="acount__message">アカウントをお持ちでない方はこちらから</div>

    <div class="login__button">
    <a class="login__button-submit" href="/register">会員登録</a>
</form>
</main>


    <footer>
      <footer class="footer">
       <div class="footer__inner">
         <div class="footer__logo">Atte, inc.</div>
       </div>
      </footer>
    </footer>
</body>

</html>
