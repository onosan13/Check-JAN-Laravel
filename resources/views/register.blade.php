@extends('layouts.login')

@section('title')新規登録@endsection

{{--メインコンテンツ--}}

@section('contents')
  <div class="login-wrapper">
    <h1>新規登録</h1>

    @if ($errors->any())
      <div>
      @foreach ($errors->all() as $error)
        @if($error === 'The name field is required.')
          <p>ニックネームが入力されていません。</p>
        @elseif($error === 'The email field is required.')
          <p>メールアドレスが入力されていません。</p>
        @elseif($error === 'The password field is required.')
          <p>パスワードが入力されていません。</p>
        @endif
      @endforeach
      </div>
    @endif

    @if($errors->any())
      <div>
        @foreach($errors->all() as $error)
          @if($error === 'The password confirmation does not match.')
            <p>パスワードが再入力と異なります。</p>
          @endif 
        @endforeach  
      </div>
    @endif
    
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