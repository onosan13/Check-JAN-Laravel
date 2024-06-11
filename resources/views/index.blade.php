@extends('layouts.login')

@section('title')ログイン@endsection

{{--メインコンテンツ--}}

@section('contents')
  <div class="login-wrapper">
    <h1>ログイン</h1>
    @if ($errors->any())
      <div>
      @foreach ($errors->all() as $error)
          {{ $error }}<br>
      @endforeach
      </div>
    @endif
    <div class="login-container">
      <form action="/login" method="post">
        @csrf
        <p>email</p>
        <input name="email" type="email"><br>
        <p>password</p>
        <input name="password" type="password"><br>
        <button class="btn login">ログインする</button>
      </form>
    </div>
    <a href="/register"><h3 class="register">新規登録はこちら</h3></a>
  </div>
@endsection