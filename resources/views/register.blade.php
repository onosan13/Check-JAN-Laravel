@extends('layouts.login')

@section('title')新規登録@endsection

{{--メインコンテンツ--}}

@section('contents')
  <div class="login-wrapper">
    <h1>新規登録</h1>
    <div class="login-container">
      <form action="/user/register" method="post">
        @csrf
        <p>ニックネーム</p>
        <input name="name" value="{{ old('name') }}"><br>
        <p>メールアドレス</p>
        <input name="email" type="email" value="{{ old('email') }}"><br>
        <p>パスワード</p>
        <input name="password" type="password"><br>
        <p>パスワード(再入力)</p>
        <input name="password_confirmation" type="password"><br>
        <button class="btn login">登録する</button>
      </form>
    </div>
    <a href="/"><h3 class="register">ログイン画面へ戻る</h3></a>
  </div>
@endsection