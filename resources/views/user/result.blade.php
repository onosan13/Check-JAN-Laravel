@extends('layouts.user')

@section('title')計算結果画面(ログイン)@endsection

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
    <h1>上がりをマイデータに登録する</h1>
    <div>
      <form method="post" action="{{ route('score.save') }}">
        @csrf
        @method('PUT')
        @foreach($result_list as $list)
          <input type="hidden" name="result_list[]" value="{{ $list }}">
        @endforeach
        <input type="hidden" name="result_score" value="{{ $result_score }}">
        <button class="btn hozon">保存する</button>
      </form>
    </div>
  </div>
@endsection
