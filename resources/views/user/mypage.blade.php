@extends('layouts.user')

@section('title')マイページ(ログイン)@endsection

{{--メインコンテンツ--}}

@section('contents')
  <div class="mypage-wrapper">
    <h1 class="mypage-title">マイページ</h1>
    <div class="mypage-container">
      <h6>ニックネーム:　{{ $nickname }}</h6>
      <h6>最高得点：　{{ $max_score }}</h6>
    </div>
    <h1>役満上がり記録</h1>
    <div class="mypage-container yakumans-data">
        @if($kokusi === 1) 
          <h5>国士無双</h5>
        @endif
        @if($su_anko === 1) 
          <h5>四暗刻</h5>
        @endif
        @if($daisangen === 1) 
          <h5>大三元</h5>
        @endif
        @if($daisu_si === 1) 
          <h5>大四喜</h5>
        @endif
        @if($shousu_si === 1) 
          <h5>小四喜</h5>
        @endif
        @if($chu_renputou === 1) 
          <h5>九蓮宝燈</h5>
        @endif
        @if($ryu_i_sou === 1) 
          <h5>緑一色</h5>
        @endif
        @if($tu_i_sou === 1) 
          <h5>字一色</h5>
        @endif
        @if($tinrountou === 1) 
          <h5>清老頭</h5>
        @endif
        @if($su_kantu === 1) 
          <h5>四槓子</h5>
        @endif
      </div>
    </div>
  </div>
@endsection
