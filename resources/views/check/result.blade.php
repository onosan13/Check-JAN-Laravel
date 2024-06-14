@extends('layouts.main')

@section('title')計算結果画面@endsection

{{--メインコンテンツ--}}

@section('contents')
{{ require_once(app_path('systems/function.php')) }}
  <div class="result-wrapper">
    <div class="result-container">
      <h1>点数はこちら</h1>
      <div class="point-container">
        <h5>{{$yaku_message}}  {{$result_score}}点</h5>
      </div>
    </div>

    <div class="check-container point-tehai">
      {{displayTehai($tehais)}}
    </div>

    <h1>上がり役はこちら</h1>
    <div class="result-tehai-container">
      @foreach ($result_list as $list)
        <h5>{{$list}}</h5>
      @endforeach
    </div>
  </div>
@endsection
