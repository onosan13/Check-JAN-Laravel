@extends('layouts.user')

@section('title')手牌確認画面(ログイン)@endsection

{{--メインコンテンツ--}}

@section('contents')
{{ require_once(app_path('systems/function.php')) }}
<div class="check-wrapper">
    <h1>条件を確認してください</h1>
    <div class="jouken-container">

      <div class="joukens">
        <h3>◎場風</h3>
        @if($joukens['bakaze'] === "ton_b")
          <p>東</p>
        @else
          <p>南</p>
        @endif
      </div>

      <div class="joukens">
        <h3>◎自風</h3>
        @switch ($joukens['jikaze']) 
          @case('ton_j')
            <p>東</p>
            @break
          @case('nan_j')
            <p>南</p>
            @break
          @case('sha_j')
            <p>西</p>
            @break
          @case('pei_j')
            <p>北</p>
            @break
          @default
        @endswitch
      </div>

      <div class="joukens">
        <h3>◎リーチ</h3>
        @if ($joukens['reach'] === "reach")
          <p>リーチ有り</p>
        @else
          <p>リーチ無し</p>
        @endif
      </div>

      <div class="joukens">
        <h3>◎ドラの数</h3>
        <p>{{ $joukens['dora'] }}</p>
      </div>

      <div class="joukens">
        <h3>◎連荘数</h3>
        <p>{{ $joukens['renchan'] }}</p>
      </div>

      <div class="joukens">
        <h3>◎鳴き</h3>
        @if ($joukens['naki'] === "naki")
          <p>鳴き有り</p>
        @else
          <p>鳴き無し</p>
        @endif
      </div>

      <div class="joukens">
        <h3>◎上がり方</h3>
        @if ($joukens['tumo_ron'] === "tumo")
          <p>ツモ</p>
        @else
          <p>ロン</p>
        @endif
      </div>

      <div class="joukens">
        <h3>◎カン数</h3>
        <p>{{ $joukens['kan'] }}</p>
      </div>

      <div class="joukens">
        <h3>◎嶺上開花</h3>
        @if ($joukens['rinshan'] === "rinshan")
          <p>嶺上開花</p>
        @else
          <p>無し</p>
        @endif
      </div>

      <div class="joukens">
        <h3>◎平和(ピンフ)</h3>
        @if ($joukens['pinhu'] === "pinhu")
          <p>平和</p>
        @else
          <p>無し</p>
        @endif
      </div>

    </div>
    <h1>手牌を確認してください</h1>
    <div class="check-container">
      @if ($tehais_count === 14)
        {{ displayTehai($tehais) }}
        <p class="check-p">
          本当にあがっていますか？<br>
          ※あがってない場合、計算間違いが出る可能性があります
        </p>
      @else
        @php
          $check++;
        @endphp
        <h5>手牌の数が間違っています<br>手牌は上がり牌含め14枚選択してください</h5>
      @endif
    </div>
    @if ($check !== 1)
      <h1>この手牌でよろしいですか？</h1>
    @else
      <h1>もう一度確認してください</h1>
    @endif
    <form action="/user/result" method="post">
      @csrf
      <div class="check-container-2">
        {{ passJouken($joukens) }}
        {{ passData($tehais) }}
        <button class="btn" type="button" onclick="history.back()">もう１度選択する</button>
        @if ($check !== 1)
          <button class="btn">点数を計算する</button>
        @endif
      </div>
    </form>
  </div>
@endsection