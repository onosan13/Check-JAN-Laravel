@extends('layouts.main')

@section('title')手牌確認画面@endsection

{{--メインコンテンツ--}}

@section('contents')
<div class="check-wrapper">
    <h1>条件を確認してください</h1>
    <div class="jouken-container">

      <div class="joukens">
        <h3>◎場風</h3>
        <?php if ($bakaze === "ton_b") : ?>
          <p>東</p>
        <?php else : ?>
          <p>南</p>
        <?php endif; ?>
      </div>

      <div class="joukens">
        <h3>◎自風</h3>
        <?php switch ($jikaze) {
          case "ton_j":
            echo "<p>東</p>";
            break;
          case "nan_j":
            echo "<p>南</p>";
            break;
          case "sha_j";
            echo "<p>西</p>";
            break;
          case "pei_j";
            echo "<p>北</p>";
            break;
          default:
        }
        ?>
      </div>

      <div class="joukens">
        <h3>◎リーチ</h3>
        <?php if ($reach === "reach") : ?>
          <p>リーチ有り</p>
        <?php else : ?>
          <p>リーチ無し</p>
        <?php endif; ?>
      </div>

      <div class="joukens">
        <h3>◎ドラの数</h3>
        <?php echo "<p>{$dora}</p>"; ?>
      </div>

      <div class="joukens">
        <h3>◎連荘数</h3>
        <?php echo "<p>{$renchan}</p>"; ?>
      </div>

      <div class="joukens">
        <h3>◎鳴き</h3>
        <?php if ($naki === "naki") : ?>
          <p>鳴き有り</p>
        <?php else : ?>
          <p>鳴き無し</p>
        <?php endif; ?>
      </div>

      <div class="joukens">
        <h3>◎場風</h3>
        <?php if ($tumo_ron === "tumo") : ?>
          <p>ツモ</p>
        <?php else : ?>
          <p>ロン</p>
        <?php endif; ?>
      </div>

      <div class="joukens">
        <h3>◎カン数</h3>
        <?php echo "<p>{$kan}</p>"; ?>
      </div>

      <div class="joukens">
        <h3>◎嶺上開花</h3>
        <?php if ($rinshan === "rinshan") : ?>
          <p>嶺上開花</p>
        <?php else : ?>
          <p>無し</p>
        <?php endif; ?>
      </div>

      <div class="joukens">
        <h3>◎平和(ピンフ)</h3>
        <?php if ($pinhu === "pinhu") : ?>
          <p>平和</p>
        <?php else : ?>
          <p>無し</p>
        <?php endif; ?>
      </div>

    </div>
    <h1>手牌を確認してください</h1>
    <div class="check-container">
      <?php if ($tehais_count === 14) : ?>
        <?php displayTehai($tehais); ?>
        <p class="check-p">
          本当にあがっていますか？<br>
          ※あがってない場合、計算間違いが出る可能性があります
        </p>
      <?php else : ?>
        <?php $check++; ?>
        <h5>手牌の数が間違っています<br>手牌は上がり牌含め14枚選択してください</h5>
      <?php endif ?>
    </div>
    <?php if ($check !== 1) : ?>
      <h1>この手牌でよろしいですか？</h1>
    <?php else : ?>
      <h1>もう一度確認してください</h1>
    <?php endif; ?>
    <form action="result.php" method="post">
      <div class="check-container-2">
        <?php passJouken($joukens); ?>
        <?php passData($tehais); ?>
        <button class="btn" type="button" onclick="history.back()">もう１度選択する</button>
        <?php if ($check !== 1) : ?>
          <button class="btn">点数を計算する</button>
        <?php endif; ?>
      </div>
    </form>
  </div>
@endsection