<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
// Authenticate.phpをみてみると、Illuminate\Auth\Middleware\Authenticateから継承されたクラスが指定されています。

// Illuminate\Auth\Middleware\Authenticate でログインをしているかどうかの判定を行う。
// ログインされていなければ、return route('login')で /login リダイレクトされる。

// このようにミドルウエアは、元々Laravelに用意されているものなので、「なんでそうなるのか？」が読み取りにくいです。
// 「authのミドルウエアを使用するとログイン画面にリダイレクトされるようになっている」 ことだけ捉えておきましょう。