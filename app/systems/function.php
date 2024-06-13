<?php

/*選択された牌を種類ごとの配列に入れる関数
---------------------------------------------------------------*/

function receive_manzu($hais,$ms_1,$ms_2,$ms_3,$ms_4,$ms_5,$ms_6,$ms_7,$ms_8,$ms_9) {

  $manzu_tehai=[];

  foreach ($hais as $hai) {
    switch ($hai) {
      case "m-1":
        for ($i = 0; $i < $ms_1; $i++) {
          $manzu_tehai[] = "m-1";
        }
        break;
      case "m-2":
        for ($i = 0; $i < $ms_2; $i++) {
          $manzu_tehai[] = "m-2";
        }
        break;
      case "m-3":
        for ($i = 0; $i < $ms_3; $i++) {
          $manzu_tehai[] = "m-3";
        }
        break;
      case "m-4":
        for ($i = 0; $i < $ms_4; $i++) {
          $manzu_tehai[] = "m-4";
        }
        break;
      case "m-5":
        for ($i = 0; $i < $ms_5; $i++) {
          $manzu_tehai[] = "m-5";
        }
        break;
      case "m-6":
        for ($i = 0; $i < $ms_6; $i++) {
          $manzu_tehai[] = "m-6";
        }
        break;
      case "m-7":
        for ($i = 0; $i < $ms_7; $i++) {
          $manzu_tehai[] = "m-7";
        }
        break;
      case "m-8":
        for ($i = 0; $i < $ms_8; $i++) {
          $manzu_tehai[] = "m-8";
        }
        break;
      case "m-9":
        for ($i = 0; $i < $ms_9; $i++) {
          $manzu_tehai[] = "m-9";
        }
        break;
      default:
    }
  }
  return $manzu_tehai;
}

function receive_pinzu($hais,$ps_1,$ps_2,$ps_3,$ps_4,$ps_5,$ps_6,$ps_7,$ps_8,$ps_9) {

  $pinzu_tehai=[];

  foreach ($hais as $hai) {
    switch ($hai) {
      case "p-1":
        for ($i = 0; $i < $ps_1; $i++) {
          $pinzu_tehai[] = "p-1";
        }
        break;
      case "p-2":
        for ($i = 0; $i < $ps_2; $i++) {
          $pinzu_tehai[] = "p-2";
        }
        break;
      case "p-3":
        for ($i = 0; $i < $ps_3; $i++) {
          $pinzu_tehai[] = "p-3";
        }
        break;
      case "p-4":
        for ($i = 0; $i < $ps_4; $i++) {
          $pinzu_tehai[] = "p-4";
        }
        break;
      case "p-5":
        for ($i = 0; $i < $ps_5; $i++) {
          $pinzu_tehai[] = "p-5";
        }
        break;
      case "p-6":
        for ($i = 0; $i < $ps_6; $i++) {
          $pinzu_tehai[] = "p-6";
        }
        break;
      case "p-7":
        for ($i = 0; $i < $ps_7; $i++) {
          $pinzu_tehai[] = "p-7";
        }
        break;
      case "p-8":
        for ($i = 0; $i < $ps_8; $i++) {
          $pinzu_tehai[] = "p-8";
        }
        break;
      case "p-9":
        for ($i = 0; $i < $ps_9; $i++) {
          $pinzu_tehai[] = "p-9";
        }
        break;
      default:
    }
  }
  return $pinzu_tehai;
}

function receive_souzu($hais,$ss_1,$ss_2,$ss_3,$ss_4,$ss_5,$ss_6,$ss_7,$ss_8,$ss_9) {

  $souzu_tehai=[];

  foreach ($hais as $hai) {
    switch ($hai) {
      case "s-1":
        for ($i = 0; $i < $ss_1; $i++) {
          $souzu_tehai[] = "s-1";
        }
        break;
      case "s-2":
        for ($i = 0; $i < $ss_2; $i++) {
          $souzu_tehai[] = "s-2";
        }
        break;
      case "s-3":
        for ($i = 0; $i < $ss_3; $i++) {
          $souzu_tehai[] = "s-3";
        }
        break;
      case "s-4":
        for ($i = 0; $i < $ss_4; $i++) {
          $souzu_tehai[] = "s-4";
        }
        break;
      case "s-5":
        for ($i = 0; $i < $ss_5; $i++) {
          $souzu_tehai[] = "s-5";
        }
        break;
      case "s-6":
        for ($i = 0; $i < $ss_6; $i++) {
          $souzu_tehai[] = "s-6";
        }
        break;
      case "s-7":
        for ($i = 0; $i < $ss_7; $i++) {
          $souzu_tehai[] = "s-7";
        }
        break;
      case "s-8":
        for ($i = 0; $i < $ss_8; $i++) {
          $souzu_tehai[] = "s-8";
        }
        break;
      case "s-9":
        for ($i = 0; $i < $ss_9; $i++) {
          $souzu_tehai[] = "s-9";
        }
        break;
      default:
    }
  }
  return $souzu_tehai;
}

function receive_jihai($hais,$js_ton,$js_nan,$js_sha,$js_pei,$js_haku,$js_hatu,$js_chun) {

  $jihai_tehai=[];

  foreach ($hais as $hai) {
    switch ($hai) {
      case "ton":
        for ($i = 0; $i < $js_ton; $i++) {
          $jihai_tehai[] = "ton";
        }
        break;
      case "nan":
        for ($i = 0; $i < $js_nan; $i++) {
          $jihai_tehai[] = "nan";
        }
        break;
      case "sha":
        for ($i = 0; $i < $js_sha; $i++) {
          $jihai_tehai[] = "sha";
        }
        break;
      case "pei":
        for ($i = 0; $i < $js_pei; $i++) {
          $jihai_tehai[] = "pei";
        }
        break;
      case "haku":
        for ($i = 0; $i < $js_haku; $i++) {
          $jihai_tehai[] = "haku";
        }
        break;
      case "hatu":
        for ($i = 0; $i < $js_hatu; $i++) {
          $jihai_tehai[] = "hatu";
        }
        break;
      case "chun":
        for ($i = 0; $i < $js_chun; $i++) {
          $jihai_tehai[] = "chun";
        }
        break;
      default:
    }
  }
  return $jihai_tehai;
}

/*選択された手牌を表示する
---------------------------------------------------------------*/

function displayTehai($tehais){
  foreach($tehais as $tehai){
    switch($tehai){
      case "m-1":
        echo '<img src="../img/janpai/man-1.png" alt="M1">';
        break;
      case "m-2":
        echo '<img src="../img/janpai/man-2.png" alt="M2">';
        break;
      case "m-3":
        echo '<img src="../img/janpai/man-3.png" alt="M3">';
        break;
      case "m-4":
        echo '<img src="../img/janpai/man-4.png" alt="M4">';
        break;
      case "m-5":
        echo '<img src="../img/janpai/man-5.png" alt="M5">';
        break;
      case "m-6":
        echo '<img src="../img/janpai/man-6.png" alt="M6">';
        break;
      case "m-7":
        echo '<img src="../img/janpai/man-7.png" alt="M7">';
        break;
      case "m-8":
        echo '<img src="../img/janpai/man-8.png" alt="M8">';
        break;
      case "m-9":
        echo '<img src="../img/janpai/man-9.png" alt="M9">';
        break;
      case "p-1":
        echo '<img src="../img/janpai/pin-1.png" alt="P1">';
        break;
      case "p-2":
        echo '<img src="../img/janpai/pin-2.png" alt="P2">';
        break;
      case "p-3":
        echo '<img src="../img/janpai/pin-3.png" alt="P3">';
        break;
      case "p-4":
        echo '<img src="../img/janpai/pin-4.png" alt="P4">';
        break;
      case "p-5":
        echo '<img src="../img/janpai/pin-5.png" alt="P5">';
        break;
      case "p-6":
        echo '<img src="../img/janpai/pin-6.png" alt="P6">';
        break;
      case "p-7":
        echo '<img src="../img/janpai/pin-7.png" alt="P7">';
        break;
      case "p-8":
        echo '<img src="../img/janpai/pin-8.png" alt="P8">';
        break;
      case "p-9":
        echo '<img src="../img/janpai/pin-9.png" alt="P9">';
        break;
      case "s-1":
        echo '<img src="../img/janpai/sou-1.png" alt="S1">';
        break;
      case "s-2":
        echo '<img src="../img/janpai/sou-2.png" alt="S2">';
        break;
      case "s-3":
        echo '<img src="../img/janpai/sou-3.png" alt="S3">';
        break;
      case "s-4":
        echo '<img src="../img/janpai/sou-4.png" alt="S4">';
        break;
      case "s-5":
        echo '<img src="../img/janpai/sou-5.png" alt="S5">';
        break;
      case "s-6":
        echo '<img src="../img/janpai/sou-6.png" alt="S6">';
        break;
      case "s-7":
        echo '<img src="../img/janpai/sou-7.png" alt="S7">';
        break;
      case "s-8":
        echo '<img src="../img/janpai/sou-8.png" alt="S8">';
        break;
      case "s-9":
        echo '<img src="../img/janpai/sou-9.png" alt="S9">';
        break;
      case "ton":
        echo '<img src="../img/janpai/ton.png" alt="TON">';
        break;
      case "nan":
        echo '<img src="../img/janpai/nan.png" alt="NAN">';
        break;
      case "sha":
        echo '<img src="../img/janpai/sha.png" alt="SHA">';
        break;
      case "pei":
        echo '<img src="../img/janpai/pei.png" alt="PEI">';
        break;
      case "haku":
        echo '<img src="../img/janpai/haku.png" alt="HAKU">';
        break;
      case "hatu":
        echo '<img src="../img/janpai/hatu.pnp.png" alt="HATU">';
        break;
      case "chun":
        echo '<img src="../img/janpai/chun.png" alt="CHUN">';
        break;
      default:
    }
  }
}

/*確認画面から結果画面へ手牌データを送信*/

function passData($tehais){
  foreach($tehais as $tehai){
    echo "<input type='hidden' name='tehais[]' value='$tehai'>";
  }
}

function passJouken($joukens){
  foreach($joukens as $jouken){
    echo "<input type='hidden' name='joukens[]' value='$jouken'>";
  }
}