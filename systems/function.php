<?php

namespace System\function;

/*選択された牌を種類ごとの配列に入れる関数
---------------------------------------------------------------*/

function receive_manzu($hais) {
  require_once("check.php");

  $manzu_tehai=[];
  global $m_count_1;
  global $m_count_2;
  global $m_count_3;
  global $m_count_4;
  global $m_count_5;
  global $m_count_6;
  global $m_count_7;
  global $m_count_8;
  global $m_count_9;

  foreach ($hais as $hai) {
    switch ($hai) {
      case "m-1":
        for ($i = 0; $i < $m_count_1; $i++) {
          $manzu_tehai[] = "m-1";
        }
        break;
      case "m-2":
        for ($i = 0; $i < $m_count_2; $i++) {
          $manzu_tehai[] = "m-2";
        }
        break;
      case "m-3":
        for ($i = 0; $i < $m_count_3; $i++) {
          $manzu_tehai[] = "m-3";
        }
        break;
      case "m-4":
        for ($i = 0; $i < $m_count_4; $i++) {
          $manzu_tehai[] = "m-4";
        }
        break;
      case "m-5":
        for ($i = 0; $i < $m_count_5; $i++) {
          $manzu_tehai[] = "m-5";
        }
        break;
      case "m-6":
        for ($i = 0; $i < $m_count_6; $i++) {
          $manzu_tehai[] = "m-6";
        }
        break;
      case "m-7":
        for ($i = 0; $i < $m_count_7; $i++) {
          $manzu_tehai[] = "m-7";
        }
        break;
      case "m-8":
        for ($i = 0; $i < $m_count_8; $i++) {
          $manzu_tehai[] = "m-8";
        }
        break;
      case "m-9":
        for ($i = 0; $i < $m_count_9; $i++) {
          $manzu_tehai[] = "m-9";
        }
        break;
      default:
    }
  }
  return $manzu_tehai;
}

function receive_pinzu($hais) {
  require_once("check.php");

  $pinzu_tehai=[];
  global $p_count_1;
  global $p_count_2;
  global $p_count_3;
  global $p_count_4;
  global $p_count_5;
  global $p_count_6;
  global $p_count_7;
  global $p_count_8;
  global $p_count_9;

  foreach ($hais as $hai) {
    switch ($hai) {
      case "p-1":
        for ($i = 0; $i < $p_count_1; $i++) {
          $pinzu_tehai[] = "p-1";
        }
        break;
      case "p-2":
        for ($i = 0; $i < $p_count_2; $i++) {
          $pinzu_tehai[] = "p-2";
        }
        break;
      case "p-3":
        for ($i = 0; $i < $p_count_3; $i++) {
          $pinzu_tehai[] = "p-3";
        }
        break;
      case "p-4":
        for ($i = 0; $i < $p_count_4; $i++) {
          $pinzu_tehai[] = "p-4";
        }
        break;
      case "p-5":
        for ($i = 0; $i < $p_count_5; $i++) {
          $pinzu_tehai[] = "p-5";
        }
        break;
      case "p-6":
        for ($i = 0; $i < $p_count_6; $i++) {
          $pinzu_tehai[] = "p-6";
        }
        break;
      case "p-7":
        for ($i = 0; $i < $p_count_7; $i++) {
          $pinzu_tehai[] = "p-7";
        }
        break;
      case "p-8":
        for ($i = 0; $i < $p_count_8; $i++) {
          $pinzu_tehai[] = "p-8";
        }
        break;
      case "p-9":
        for ($i = 0; $i < $p_count_9; $i++) {
          $pinzu_tehai[] = "p-9";
        }
        break;
      default:
    }
  }
  return $pinzu_tehai;
}

function receive_souzu($hais) {
  require_once("check.php");

  $souzu_tehai=[];
  global $s_count_1;
  global $s_count_2;
  global $s_count_3;
  global $s_count_4;
  global $s_count_5;
  global $s_count_6;
  global $s_count_7;
  global $s_count_8;
  global $s_count_9;

  foreach ($hais as $hai) {
    switch ($hai) {
      case "s-1":
        for ($i = 0; $i < $s_count_1; $i++) {
          $souzu_tehai[] = "s-1";
        }
        break;
      case "s-2":
        for ($i = 0; $i < $s_count_2; $i++) {
          $souzu_tehai[] = "s-2";
        }
        break;
      case "s-3":
        for ($i = 0; $i < $s_count_3; $i++) {
          $souzu_tehai[] = "s-3";
        }
        break;
      case "s-4":
        for ($i = 0; $i < $s_count_4; $i++) {
          $souzu_tehai[] = "s-4";
        }
        break;
      case "s-5":
        for ($i = 0; $i < $s_count_5; $i++) {
          $souzu_tehai[] = "s-5";
        }
        break;
      case "s-6":
        for ($i = 0; $i < $s_count_6; $i++) {
          $souzu_tehai[] = "s-6";
        }
        break;
      case "s-7":
        for ($i = 0; $i < $s_count_7; $i++) {
          $souzu_tehai[] = "s-7";
        }
        break;
      case "s-8":
        for ($i = 0; $i < $s_count_8; $i++) {
          $souzu_tehai[] = "s-8";
        }
        break;
      case "s-9":
        for ($i = 0; $i < $s_count_9; $i++) {
          $souzu_tehai[] = "s-9";
        }
        break;
      default:
    }
  }
  return $souzu_tehai;
}

function receive_jihai($hais) {
  require_once("check.php");

  $jihai_tehai=[];
  global $j_count_ton;
  global $j_count_nan;
  global $j_count_sha;
  global $j_count_pei;
  global $j_count_haku;
  global $j_count_hatu;
  global $j_count_chun;

  foreach ($hais as $hai) {
    switch ($hai) {
      case "ton":
        for ($i = 0; $i < $j_count_ton; $i++) {
          $jihai_tehai[] = "ton";
        }
        break;
      case "nan":
        for ($i = 0; $i < $j_count_nan; $i++) {
          $jihai_tehai[] = "nan";
        }
        break;
      case "sha":
        for ($i = 0; $i < $j_count_sha; $i++) {
          $jihai_tehai[] = "sha";
        }
        break;
      case "pei":
        for ($i = 0; $i < $j_count_pei; $i++) {
          $jihai_tehai[] = "pei";
        }
        break;
      case "haku":
        for ($i = 0; $i < $j_count_haku; $i++) {
          $jihai_tehai[] = "haku";
        }
        break;
      case "hatu":
        for ($i = 0; $i < $j_count_hatu; $i++) {
          $jihai_tehai[] = "hatu";
        }
        break;
      case "chun":
        for ($i = 0; $i < $j_count_chun; $i++) {
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