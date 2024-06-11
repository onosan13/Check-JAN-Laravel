@extends('layouts.main')

@section('title')手牌入力画面@endsection

{{--メインコンテンツ--}}

@section('contents')
  <div class="top">
    <div class="top-container">
      <h4>※ご注意</h4>
        <ul>
          <li>翻計算のみ対応しております。</li>
          <li>符計算は対応しておりません。</li>
          <li>三麻には対応しておりません。</li>
        </ul>
    </div>
  </div>

  <main>
    <form class="form-wrapper" action="main_contents/check.php" method="post">
      @csrf
      <h1>条件を選択してください</h1>
      <div class="main-container">
        <div class="form-container">
          <h3>◎場風を選択してください</h3>
          <div class="kaze">
            <label><input name="bakaze" type="radio" value="ton_b" checked><p>東</p></label>
            <label><input name="bakaze" type="radio" value="nan_b"><p>南</p></label>
          </div>
        </div>
        <div class="form-container">
          <h3>◎自風を選択してください</h3>
          <div class="kaze">
            <label><input name="jikaze" type="radio" value="ton_j" checked><p>東</p></label>
            <label><input name="jikaze" type="radio" value="nan_j"><p>南</p></label>
            <label><input name="jikaze" type="radio" value="sha_j"><p>西</p></label>
            <label><input name="jikaze" type="radio" value="pei_j"><p>北</p></label>
          </div>
        </div>
        <div class="form-container">
          <h3>◎リーチの有無を教えてください</h3>
          <div class="kaze">
            <input type="hidden" name="reach" value="0">
            <label><input name="reach" type="checkbox" value="reach"><p>リーチ</p></label>
          </div>
        </div>
        <div class="form-container">
          <h3>◎ドラの数を選択してください</h3>
          <div class="dora-count">
            <select name="dora">
              <option value="0" selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
            </select>
          </div>
        </div>
        <div class="form-container">
          <h3>◎連荘数を選択してください</h3>
          <div class="dora-count">
            <select name="renchan">
              <option selected>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
            </select>
          </div>
        </div>
        <div class="form-container">
          <h3>◎鳴きの有無を教えてください</h3>
          <div class="kaze">
            <input type="hidden" name="naki" value="0">
            <label><input name="naki" type="checkbox" value="naki"><p>鳴き</p></label>
          </div>
        </div>
        <div class="form-container">
          <h3>◎上がり方を選択してください</h3>
          <div class="kaze">
            <label><input name="tumo_ron" type="radio" value="tumo" checked><p>ツモ</p></label>
            <label><input name="tumo_ron" type="radio" value="ron"><p>ロン</p></label>
          </div>
        </div>
        <div class="form-container">
          <h3>◎カンの数を選択してください</h3>
          <div class="dora-count">
            <select name="kan">
              <option selected>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
        </div>
        <div class="form-container">
          <h3>◎嶺上牌で上がった場合は選択してください</h3>
          <div class="kaze">
            <input type="hidden" name="rinshan" value="0">
            <label><input name="rinshan" type="checkbox" value="rinshan"><p>嶺上開花</p></label>
          </div>
        </div>
        <div class="form-container">
          <h3>◎平和(ピンフ)の場合は選択してください</h3>
          <div class="kaze">
            <input type="hidden" name="pinhu" value="0">
            <label><input name="pinhu" type="checkbox" value="pinhu"><p>平和(ピンフ)</p></label>
          </div>
        </div>
      </div>


      <!--ここから手牌選択-->


      <h1>手牌を選択してください</h1>
      <div class="main-container-2">
        <div class="tehai-container">
          <h3>◎字牌の種類と数を選択してください</h3>
          <div class="jan-pai">

            <div class="tehai-form">
              <input type="hidden" name="jihai[]" value="0">
              <label>
                <input class="tehai-che" name="jihai[]" type="checkbox" value="ton">
                <img class="pai-img" src="/img/janpai/ton.png" alt="東">
              </label>
              <select class="tehai-sele" name="j-count-ton">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="jihai[]" type="checkbox" value="nan">
                <img class="pai-img" src="/img/janpai/nan.png" alt="南">
              </label>
              <select class="tehai-sele" name="j-count-nan">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="jihai[]" type="checkbox" value="sha">
                <img class="pai-img" src="/img/janpai/sha.png" alt="西">
              </label>
              <select class="tehai-sele" name="j-count-sha">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="jihai[]" type="checkbox" value="pei">
                <img class="pai-img" src="/img/janpai/pei.png" alt="北">
              </label>
              <select class="tehai-sele" name="j-count-pei">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="jihai[]" type="checkbox" value="haku">
                <img class="pai-img" src="/img/janpai/haku.png" alt="白">
              </label>
              <select class="tehai-sele" name="j-count-haku">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="jihai[]" type="checkbox" value="hatu">
                <img class="pai-img" src="/img/janpai/hatu.pnp.png" alt="発">
              </label>
              <select class="tehai-sele" name="j-count-hatu">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="jihai[]" type="checkbox" value="chun">
                <img class="pai-img" src="/img/janpai/chun.png" alt="中">
              </label>
              <select class="tehai-sele" name="j-count-chun">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

          </div>
        </div>

        <!--萬字-->

        <div class="tehai-container">
          <h3>◎萬字の種類と数を選択してください</h3>
          <div class="jan-pai">

            <div class="tehai-form">
              <input type="hidden" name="manzu[]" value="0">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-1">
                <img class="pai-img" src="/img/janpai/man-1.png" alt="M1">
              </label>
              <select class="tehai-sele" name="m-count-1">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-2">
                <img class="pai-img" src="/img/janpai/man-2.png" alt="M2">
              </label>
              <select class="tehai-sele" name="m-count-2">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-3">
                <img class="pai-img" src="/img/janpai/man-3.png" alt="M3">
              </label>
              <select class="tehai-sele" name="m-count-3">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-4">
                <img class="pai-img" src="/img/janpai/man-4.png" alt="M4">
              </label>
              <select class="tehai-sele" name="m-count-4">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-5">
                <img class="pai-img" src="/img/janpai/man-5.png" alt="M5">
              </label>
              <select class="tehai-sele" name="m-count-5">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-6">
                <img class="pai-img" src="/img/janpai/man-6.png" alt="M6">
              </label>
              <select class="tehai-sele" name="m-count-6">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-7">
                <img class="pai-img" src="/img/janpai/man-7.png" alt="M7">
              </label>
              <select class="tehai-sele" name="m-count-7">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-8">
                <img class="pai-img" src="/img/janpai/man-8.png" alt="M8">
              </label>
              <select class="tehai-sele" name="m-count-8">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="manzu[]" type="checkbox" value="m-9">
                <img class="pai-img" src="/img/janpai/man-9.png" alt="M9">
              </label>
              <select class="tehai-sele" name="m-count-9">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>
          </div>
        </div>

        <!--筒字-->

        <div class="tehai-container">
          <h3>◎筒字の種類と数を選択してください</h3>
          <div class="jan-pai">

            <div class="tehai-form">
              <input type="hidden" name="pinzu[]" value="0">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-1">
                <img class="pai-img" src="/img/janpai/pin-1.png" alt="P1">
              </label>
              <select class="tehai-sele" name="p-count-1">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-2">
                <img class="pai-img" src="/img/janpai/pin-2.png" alt="P2">
              </label>
              <select class="tehai-sele" name="p-count-2">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-3">
                <img class="pai-img" src="/img/janpai/pin-3.png" alt="P3">
              </label>
              <select class="tehai-sele" name="p-count-3">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-4">
                <img class="pai-img" src="/img/janpai/pin-4.png" alt="P4">
              </label>
              <select class="tehai-sele" name="p-count-4">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-5">
                <img class="pai-img" src="/img/janpai/pin-5.png" alt="P5">
              </label>
              <select class="tehai-sele" name="p-count-5">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-6">
                <img class="pai-img" src="/img/janpai/pin-6.png" alt="P6">
              </label>
              <select class="tehai-sele" name="p-count-6">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-7">
                <img class="pai-img" src="/img/janpai/pin-7.png" alt="P7">
              </label>
              <select class="tehai-sele" name="p-count-7">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-8">
                <img class="pai-img" src="/img/janpai/pin-8.png" alt="P8">
              </label>
              <select class="tehai-sele" name="p-count-8">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="pinzu[]" type="checkbox" value="p-9">
                <img class="pai-img" src="/img/janpai/pin-9.png" alt="P9">
              </label>
              <select class="tehai-sele" name="p-count-9">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>
          </div>
        </div>

        <!--索字-->

        <div class="tehai-container">
          <h3>◎索字の種類と数を選択してください</h3>
          <div class="jan-pai">

            <div class="tehai-form">
              <input type="hidden" name="souzu[]" value="0">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-1">
                <img class="pai-img" src="/img/janpai/sou-1.png" alt="S1">
              </label>
              <select class="tehai-sele" name="s-count-1">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-2">
                <img class="pai-img" src="/img/janpai/sou-2.png" alt="S2">
              </label>
              <select class="tehai-sele" name="s-count-2">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-3">
                <img class="pai-img" src="/img/janpai/sou-3.png" alt="S3">
              </label>
              <select class="tehai-sele" name="s-count-3">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-4">
                <img class="pai-img" src="/img/janpai/sou-4.png" alt="S4">
              </label>
              <select class="tehai-sele" name="s-count-4">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-5">
                <img class="pai-img" src="/img/janpai/sou-5.png" alt="S5">
              </label>
              <select class="tehai-sele" name="s-count-5">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-6">
                <img class="pai-img" src="/img/janpai/sou-6.png" alt="S6">
              </label>
              <select class="tehai-sele" name="s-count-6">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-7">
                <img class="pai-img" src="/img/janpai/sou-7.png" alt="S7">
              </label>
              <select class="tehai-sele" name="s-count-7">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-8">
                <img class="pai-img" src="/img/janpai/sou-8.png" alt="S8">
              </label>
              <select class="tehai-sele" name="s-count-8">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

            <div class="tehai-form">
              <label>
                <input class="tehai-che" name="souzu[]" type="checkbox" value="s-9">
                <img class="pai-img" src="/img/janpai/sou-9.png" alt="S9">
              </label>
              <select class="tehai-sele" name="s-count-9">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <div class="clear"></div>
            </div>

          </div>
        </div>

      </div>
      <div class="main-container-3">
        <div class="btn-container">
          <input class="btn" type="reset" value="リセットする">
        </div>
        <div class="btn-container">
          <button class="btn">確認画面へ</button>
        </div>
      </div>
    </form>
  </main>
@endsection