<?php

/*条件用*/

function reach($joukens)
{
  if ($joukens[5] == "naki") {
    return;
  } elseif ($joukens[2] == "reach") {
    return 1;
  }
}

function renchan($joukens)
{
  if ($joukens[4] === 0) {
    return;
  }
  return $joukens[4] * 300;
}

function tumo_ron($joukens)
{
  if ($joukens[5] == "naki") {
    return;
  } elseif ($joukens[6] == "tumo") {
    return 1;
  }
}

function rinshan($joukens)
{
  if ($joukens[7] == 0) {
    return false;
  } elseif ($joukens[6] == "ron") {
    return false;
  }

  if ($joukens[8] == "rinshan") {
    return 1;
  }
}

function pinhu($tehai,$joukens)
{
  $anko_count = array_count_values($tehai);

  $check=0;

  foreach ($anko_count as $anko) {
    if ($anko == 3) {
      $check++;
      if($check==2){
        return;
      }
    }
  }

  if ($joukens[5] == "naki") {
    return;
  } elseif ($joukens[9] == "pinhu") {
    return 1;
  }
}


/*七対子確認用*/

function ti_toi($tehai,$ryan_pe_kou,$joukens)
{
  if ($ryan_pe_kou !== null) {
    return;
  }

  $ti_toi_count = array_count_values($tehai);

  if ($joukens[5] !== "naki") {
    foreach ($ti_toi_count as $count) {
      if ($count !== 2) {
        return;
      }
    }
    return 2;
  }
}


/*タンヤオチェック*/

function tanyao($tehai)
{
  foreach ($tehai as $hai) {
    if (preg_match("/1/", $hai)) {
      return;
    } elseif (preg_match("/9/", $hai)) {
      return;
    } elseif (preg_match("/ton/", $hai)) {
      return;
    } elseif (preg_match("/nan/", $hai)) {
      return;
    } elseif (preg_match("/sha/", $hai)) {
      return;
    } elseif (preg_match("/pei/", $hai)) {
      return;
    } elseif (preg_match("/haku/", $hai)) {
      return;
    } elseif (preg_match("/hatu/", $hai)) {
      return;
    } elseif (preg_match("/chun/", $hai)) {
      return;
    }
  }
  return 1;
}


/*役満確認用関数*/

function kokusi($tehai,$joukens)
{

  $kokusi1 = ["m-1", "m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi2 = ["m-1", "m-9", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi3 = ["m-1", "m-9", "p-1", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi4 = ["m-1", "m-9", "p-1", "p-9", "p-9", "s-1", "s-9", "ton", "nan", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi5 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-1", "s-9", "ton", "nan", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi6 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "s-9", "ton", "nan", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi7 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "ton", "nan", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi8 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "nan", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi9 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "sha", "sha", "pei", "haku", "hatu", "chun"];
  $kokusi10 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "sha", "pei", "pei", "haku", "hatu", "chun"];
  $kokusi11 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "sha", "pei", "haku", "haku", "hatu", "chun"];
  $kokusi12 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "sha", "pei", "haku", "hatu", "hatu", "chun"];
  $kokusi13 = ["m-1", "m-9", "p-1", "p-9", "s-1", "s-9", "ton", "nan", "sha", "pei", "haku", "hatu", "chun", "chun"];

  $kokusi_array = [$kokusi1, $kokusi2, $kokusi3, $kokusi4, $kokusi5, $kokusi6, $kokusi7, $kokusi8, $kokusi9, $kokusi10, $kokusi11, $kokusi12, $kokusi13];

  if ($joukens[5] !== "naki") {
    foreach ($kokusi_array as $kokusi) {
      if ($tehai === $kokusi) {
        return 13;
      }
    }
  }
}

function su_anko($tehai,$joukens)
{

  $anko_count = array_count_values($tehai);
  $count_2 = 0;

  if ($joukens[5] !== "naki") {
    foreach ($anko_count as $anko) {
      switch ($anko) {
        case 1:
          return;
        case 4:
          return;
        case 2:
          if ($count_2 === 1) {
            return;
          } else {
            $count_2++;
          }
          break;
        default:
          break;
      }
    }
    return 13;
  }
}

function daisangen($tehai)
{

  $sangen_count = array_count_values($tehai);
  $haku = 0;
  $hatu = 0;
  $chun = 0;

  foreach ($tehai as $hai) {
    if ($hai === "haku") {
      $haku = $sangen_count["haku"];
    } elseif ($hai === "hatu") {
      $hatu = $sangen_count["hatu"];
    } elseif ($hai === "chun") {
      $chun = $sangen_count["chun"];
    }
  }

  if ($haku === 3 && $hatu === 3 && $chun === 3) {
    return 13;
  }
}

function daisu_si($tehai)
{

  $kaze_count = array_count_values($tehai);
  $ton = 0;
  $nan = 0;
  $sha = 0;
  $pei = 0;
  $count_2 = 0;

  foreach ($kaze_count as $anko) {
    switch ($anko) {
      case 1:
        return;
      case 4:
        return;
      case 2:
        if ($count_2 === 1) {
          return;
        } else {
          $count_2++;
        }
        break;
      default:
        break;
    }
  }

  foreach ($tehai as $hai) {
    if ($hai === "ton") {
      $ton = $kaze_count["ton"];
    } elseif ($hai === "nan") {
      $nan = $kaze_count["nan"];
    } elseif ($hai === "sha") {
      $sha = $kaze_count["sha"];
    } elseif ($hai === "pei") {
      $pei = $kaze_count["pei"];
    }
  }

  if ($ton === 3 && $nan === 3 && $sha === 3 && $pei === 3) {
    return 13;
  }
}

function shousu_si($tehai)
{

  $kaze_count = array_count_values($tehai);
  $ton = 0;
  $nan = 0;
  $sha = 0;
  $pei = 0;

  foreach ($tehai as $hai) {
    if ($hai === "ton") {
      $ton = $kaze_count["ton"];
    } elseif ($hai === "nan") {
      $nan = $kaze_count["nan"];
    } elseif ($hai === "sha") {
      $sha = $kaze_count["sha"];
    } elseif ($hai === "pei") {
      $pei = $kaze_count["pei"];
    }
  }

  if ($ton === 2 && $nan === 3 && $sha === 3 && $pei === 3) {
    return 13;
  } elseif ($ton === 3 && $nan === 2 && $sha === 3 && $pei === 3) {
    return 13;
  } elseif ($ton === 3 && $nan === 3 && $sha === 2 && $pei === 3) {
    return 13;
  } elseif ($ton === 3 && $nan === 3 && $sha === 3 && $pei === 2) {
    return 13;
  }
}

function chu_renpoutou($tehai,$joukens)
{

  $chu_ren_m1 = ["m-1", "m-1", "m-1", "m-1", "m-2", "m-3", "m-4", "m-5", "m-6", "m-7", "m-8", "m-9", "m-9", "m-9",];
  $chu_ren_m2 = ["m-1", "m-1", "m-1", "m-2", "m-2", "m-3", "m-4", "m-5", "m-6", "m-7", "m-8", "m-9", "m-9", "m-9",];
  $chu_ren_m3 = ["m-1", "m-1", "m-1", "m-2", "m-3", "m-3", "m-4", "m-5", "m-6", "m-7", "m-8", "m-9", "m-9", "m-9",];
  $chu_ren_m4 = ["m-1", "m-1", "m-1", "m-2", "m-3", "m-4", "m-4", "m-5", "m-6", "m-7", "m-8", "m-9", "m-9", "m-9",];
  $chu_ren_m5 = ["m-1", "m-1", "m-1", "m-2", "m-3", "m-4", "m-5", "m-5", "m-6", "m-7", "m-8", "m-9", "m-9", "m-9",];
  $chu_ren_m6 = ["m-1", "m-1", "m-1", "m-2", "m-3", "m-4", "m-5", "m-6", "m-6", "m-7", "m-8", "m-9", "m-9", "m-9",];
  $chu_ren_m7 = ["m-1", "m-1", "m-1", "m-2", "m-3", "m-4", "m-5", "m-6", "m-7", "m-7", "m-8", "m-9", "m-9", "m-9",];
  $chu_ren_m8 = ["m-1", "m-1", "m-1", "m-2", "m-3", "m-4", "m-5", "m-6", "m-7", "m-8", "m-8", "m-9", "m-9", "m-9",];
  $chu_ren_m9 = ["m-1", "m-1", "m-1", "m-2", "m-3", "m-4", "m-5", "m-6", "m-7", "m-8", "m-9", "m-9", "m-9", "m-9",];

  $chu_ren_p1 = ["p-1", "p-1", "p-1", "p-1", "p-2", "p-3", "p-4", "p-5", "p-6", "p-7", "p-8", "p-9", "p-9", "p-9",];
  $chu_ren_p2 = ["p-1", "p-1", "p-1", "p-2", "p-2", "p-3", "p-4", "p-5", "p-6", "p-7", "p-8", "p-9", "p-9", "p-9",];
  $chu_ren_p3 = ["p-1", "p-1", "p-1", "p-2", "p-3", "p-3", "p-4", "p-5", "p-6", "p-7", "p-8", "p-9", "p-9", "p-9",];
  $chu_ren_p4 = ["p-1", "p-1", "p-1", "p-2", "p-3", "p-4", "p-4", "p-5", "p-6", "p-7", "p-8", "p-9", "p-9", "p-9",];
  $chu_ren_p5 = ["p-1", "p-1", "p-1", "p-2", "p-3", "p-4", "p-5", "p-5", "p-6", "p-7", "p-8", "p-9", "p-9", "p-9",];
  $chu_ren_p6 = ["p-1", "p-1", "p-1", "p-2", "p-3", "p-4", "p-5", "p-6", "p-6", "p-7", "p-8", "p-9", "p-9", "p-9",];
  $chu_ren_p7 = ["p-1", "p-1", "p-1", "p-2", "p-3", "p-4", "p-5", "p-6", "p-7", "p-7", "p-8", "p-9", "p-9", "p-9",];
  $chu_ren_p8 = ["p-1", "p-1", "p-1", "p-2", "p-3", "p-4", "p-5", "p-6", "p-7", "p-8", "p-8", "p-9", "p-9", "p-9",];
  $chu_ren_p9 = ["p-1", "p-1", "p-1", "p-2", "p-3", "p-4", "p-5", "p-6", "p-7", "p-8", "p-9", "p-9", "p-9", "p-9",];

  $chu_ren_s1 = ["s-1", "s-1", "s-1", "s-1", "s-2", "s-3", "s-4", "s-5", "s-6", "s-7", "s-8", "s-9", "s-9", "s-9",];
  $chu_ren_s2 = ["s-1", "s-1", "s-1", "s-2", "s-2", "s-3", "s-4", "s-5", "s-6", "s-7", "s-8", "s-9", "s-9", "s-9",];
  $chu_ren_s3 = ["s-1", "s-1", "s-1", "s-2", "s-3", "s-3", "s-4", "s-5", "s-6", "s-7", "s-8", "s-9", "s-9", "s-9",];
  $chu_ren_s4 = ["s-1", "s-1", "s-1", "s-2", "s-3", "s-4", "s-4", "s-5", "s-6", "s-7", "s-8", "s-9", "s-9", "s-9",];
  $chu_ren_s5 = ["s-1", "s-1", "s-1", "s-2", "s-3", "s-4", "s-5", "s-5", "s-6", "s-7", "s-8", "s-9", "s-9", "s-9",];
  $chu_ren_s6 = ["s-1", "s-1", "s-1", "s-2", "s-3", "s-4", "s-5", "s-6", "s-6", "s-7", "s-8", "s-9", "s-9", "s-9",];
  $chu_ren_s7 = ["s-1", "s-1", "s-1", "s-2", "s-3", "s-4", "s-5", "s-6", "s-7", "s-7", "s-8", "s-9", "s-9", "s-9",];
  $chu_ren_s8 = ["s-1", "s-1", "s-1", "s-2", "s-3", "s-4", "s-5", "s-6", "s-7", "s-8", "s-8", "s-9", "s-9", "s-9",];
  $chu_ren_s9 = ["s-1", "s-1", "s-1", "s-2", "s-3", "s-4", "s-5", "s-6", "s-7", "s-8", "s-9", "s-9", "s-9", "s-9",];

  $chu_ren_array = [
    $chu_ren_m1, $chu_ren_m2, $chu_ren_m3, $chu_ren_m4, $chu_ren_m5, $chu_ren_m6, $chu_ren_m7, $chu_ren_m8, $chu_ren_m9,
    $chu_ren_p1, $chu_ren_p2, $chu_ren_p3, $chu_ren_p4, $chu_ren_p5, $chu_ren_p6, $chu_ren_p7, $chu_ren_p8, $chu_ren_p9,
    $chu_ren_s1, $chu_ren_s2, $chu_ren_s3, $chu_ren_s4, $chu_ren_s5, $chu_ren_s6, $chu_ren_s7, $chu_ren_s8, $chu_ren_s9,
  ];

  if ($joukens[5] !== "naki") {
    foreach ($chu_ren_array as $chu_ren) {
      if ($tehai === $chu_ren) {
        return 13;
      }
    }
  }
  return;
}

function ryu_i_sou($tehai)
{

  foreach ($tehai as $hai) {
    if (preg_match("/s-1/", $hai)) {
      return;
    } elseif (preg_match("/s-5/", $hai)) {
      return;
    } elseif (preg_match("/s-7/", $hai)) {
      return;
    } elseif (preg_match("/s-9/", $hai)) {
      return;
    } elseif (preg_match("/ton/", $hai)) {
      return;
    } elseif (preg_match("/nan/", $hai)) {
      return;
    } elseif (preg_match("/sha/", $hai)) {
      return;
    } elseif (preg_match("/pei/", $hai)) {
      return;
    } elseif (preg_match("/haku/", $hai)) {
      return;
    } elseif (preg_match("/chun/", $hai)) {
      return;
    } elseif (preg_match("/m-/", $hai)) {
      return;
    } elseif (preg_match("/p-/", $hai)) {
      return;
    }
  }
  return 13;
}

function tu_i_sou($tehai)
{

  $anko_count = array_count_values($tehai);
  $count_2 = 0;

  foreach ($tehai as $hai) {
    if (preg_match("/m-/", $hai)) {
      return;
    } elseif (preg_match("/p-/", $hai)) {
      return;
    } elseif (preg_match("/s-/", $hai)) {
      return;
    }
  }

  foreach ($anko_count as $anko) {
    switch ($anko) {
      case 1:
        return;
      case 4:
        return;
      default:
        break;
    }
  }
  return 13;
}

function tinrountou($tehai)
{

  $anko_count = array_count_values($tehai);
  $count_2 = 0;

  foreach ($anko_count as $anko) {
    switch ($anko) {
      case 1:
        return;
      case 4:
        return;
      case 2:
        if ($count_2 === 1) {
          return;
        } else {
          $count_2++;
        }
        break;
      default:
        break;
    }
  }

  foreach ($tehai as $hai) {
    for ($i = 2; $i <= 8; $i++) {
      if (preg_match("/-{$i}/", $hai)) {
        return;
      }
    }
    if (preg_match("/ton/", $hai)) {
      return;
    } elseif (preg_match("/nan/", $hai)) {
      return;
    } elseif (preg_match("/sha/", $hai)) {
      return;
    } elseif (preg_match("/pei/", $hai)) {
      return;
    } elseif (preg_match("/haku/", $hai)) {
      return;
    } elseif (preg_match("/hatu/", $hai)) {
      return;
    } elseif (preg_match("/chun/", $hai)) {
      return;
    }
  }
  return 13;
}

function su_kantu($joukens)
{
  if ($joukens[7] == 4) {
    return 13;
  } else {
    return;
  }
}


/*通常役用*/

function honroutou($tehai,$joukens)
{

  $anko_count = array_count_values($tehai);
  $count_2 = 0;

  foreach ($tehai as $hai) {
    for ($i = 2; $i <= 8; $i++) {
      if (preg_match("/-{$i}/", $hai)) {
        return;
      }
    }
  }

  foreach ($anko_count as $anko) {
    switch ($anko) {
      case 1:
        return;
      case 4:
        return;
      default:
        break;
    }
  }
  return 2;
}

function sanshoku_doukou($tehai)
{
  $anko_count = array_count_values($tehai);
  $sanshoku = 0;
  $sanshoku_anko = [];
  $sanshoku_num = [];

  foreach ($anko_count as $anko) {
    if ($anko === 3) {
      $sanshoku = array_keys($anko_count, $anko);
      break;
    }
  }

  for ($i = 0; $i < 3; $i++) {
    if (!empty($sanshoku[$i])) {
      $sanshoku_anko[] = $sanshoku[$i];
    }
  }


  foreach ($sanshoku_anko as $san) {
    if (preg_match("/m/", $san)) {
      $sanshoku_num[] = substr($san, -1);
    } elseif (preg_match("/p/", $san)) {
      $sanshoku_num[] = substr($san, -1);
    } elseif (preg_match("/s/", $san)) {
      $sanshoku_num[] = substr($san, -1);
    }
  }

  if (count($sanshoku_num) >= 3) {
    if ($sanshoku_num[0] === $sanshoku_num[1] && $sanshoku_num[1] === $sanshoku_num[2]) {
      return 2;
    }
  }
}

function shousangen($tehai)
{

  $kaze_count = array_count_values($tehai);
  $haku = 0;
  $hatu = 0;
  $chun = 0;

  foreach ($tehai as $hai) {
    if ($hai === "haku") {
      $haku = $kaze_count["haku"];
    } elseif ($hai === "hatu") {
      $hatu = $kaze_count["hatu"];
    } elseif ($hai === "chun") {
      $chun = $kaze_count["chun"];
    }
  }

  if ($haku === 2 && $hatu === 3 && $chun === 3) {
    return 2;
  } elseif ($haku === 3 && $hatu === 2 && $chun === 3) {
    return 2;
  } elseif ($haku === 3 && $hatu === 3 && $chun === 2) {
    return 2;
  }
}

function sananko($tehai,$joukens,$su_anko)
{
  $anko_count = array_count_values($tehai);
  $count = 0;

  if($su_anko !== null){
    return;
  }

  foreach ($anko_count as $anko) {
    if ($anko === 3) {
      $count++;
    }
  }

  if ($joukens[5] !== "naki") {
    if ($count >= 3) {
      return 2;
    }
  }
}

function sanshoku_doujun($tehai,$joukens)
{
  $anko_count = array_count_values($tehai);
  $anko_count_num = count($anko_count);

  $manzu_array = [];
  $pinzu_array = [];
  $souzu_array = [];

  if ($anko_count_num >= 9) {
    foreach ($tehai as $hai) {
      if (preg_match("/m-/", $hai)) {
        $manzu_array[] = $hai;
      } elseif (preg_match("/p-/", $hai)) {
        $pinzu_array[] = $hai;
      } elseif (preg_match("/s-/", $hai)) {
        $souzu_array[] = $hai;
      }
    }
  } else {
    return;
  }

  $manzu_num = [];
  $pinzu_num = [];
  $souzu_num = [];

  foreach ($manzu_array as $manzu) {
    $manzu_num[] = substr($manzu, -1);
  }
  foreach ($pinzu_array as $pinzu) {
    $pinzu_num[] = substr($pinzu, -1);
  }
  foreach ($souzu_array as $souzu) {
    $souzu_num[] = substr($souzu, -1);
  }

  $manzu_unique=array_unique($manzu_num);
  $pinzu_unique=array_unique($pinzu_num);
  $souzu_unique=array_unique($souzu_num);

  $doujun = array_intersect($manzu_unique, $pinzu_unique, $souzu_unique);
  $doujun_count = count($doujun);

  if ($doujun_count === 3) {
    if ($joukens[5] === "naki") {
      return 1;
    } else {
      return 2;
    }
  } else {
    return;
  }
}

function ikkitu_kan($tehai,$joukens)
{
  $anko_count = array_count_values($tehai);
  $anko_count_num = count($anko_count);

  $manzu_array = [];
  $pinzu_array = [];
  $souzu_array = [];

  if ($anko_count_num >= 9) {
    foreach ($tehai as $hai) {
      if (preg_match("/m-/", $hai)) {
        $manzu_array[] = $hai;
      } elseif (preg_match("/p-/", $hai)) {
        $pinzu_array[] = $hai;
      } elseif (preg_match("/s-/", $hai)) {
        $souzu_array[] = $hai;
      }
    }
  } else {
    return;
  }

  $manzu_num = [];
  $pinzu_num = [];
  $souzu_num = [];

  foreach ($manzu_array as $manzu) {
    $manzu_num[] = substr($manzu, -1);
  }
  foreach ($pinzu_array as $pinzu) {
    $pinzu_num[] = substr($pinzu, -1);
  }
  foreach ($souzu_array as $souzu) {
    $souzu_num[] = substr($souzu, -1);
  }

  $ittu = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  $manzu_max = count($manzu_num);
  $pinzu_max = count($pinzu_num);
  $souzu_max = count($souzu_num);

  if ($manzu_max > $pinzu_max && $manzu_max > $souzu_max) {
    $manzu_ittu = array_values(array_unique($manzu_num));
    if ($ittu == $manzu_ittu) {
      if ($joukens[5] === "naki") {
        return 1;
      } else {
        return 2;
      }
    } else {
      return;
    }
  }
  if ($manzu_max < $pinzu_max && $pinzu_max > $souzu_max) {
    $pinzu_ittu = array_values(array_unique($pinzu_num));
    if ($ittu == $pinzu_ittu) {
      if ($joukens[5] === "naki") {
        return 1;
      } else {
        return 2;
      }
    } else {
      return;
    }
  }
  if ($souzu_max > $pinzu_max && $manzu_max < $souzu_max) {
    $souzu_ittu = array_values(array_unique($souzu_num));
    if ($ittu == $souzu_ittu) {
      if ($joukens[5] === "naki") {
        return 1;
      } else {
        return 2;
      }
    } else {
      return;
    }
  }


  return;
}

function honitu($tehai,$joukens,$tinitu)
{
  if ($tinitu == null) {
    foreach ($tehai as $hai) {
      if (preg_match("/m-/", $hai)) {
        foreach ($tehai as $hai) {
          if (preg_match("/p-/", $hai) || preg_match("/s-/", $hai)) {
            return;
          }
        }
      }
      if (preg_match("/p-/", $hai)) {
        foreach ($tehai as $hai) {
          if (preg_match("/m-/", $hai) || preg_match("/s-/", $hai)) {
            return;
          }
        }
      }
      if (preg_match("/s-/", $hai)) {
        foreach ($tehai as $hai) {
          if (preg_match("/m-/", $hai) || preg_match("/p-/", $hai)) {
            return;
          }
        }
      }
    }
    if ($joukens[5] == "naki") {
      return 2;
    } else {
      return 3;
    }
  }
}

function tinitu($tehai,$joukens)
{
  foreach ($tehai as $hai) {
    if (preg_match("/m-/", $hai)) {
      foreach ($tehai as $hai) {
        if (preg_match("/p-/", $hai) || preg_match("/s-/", $hai)) {
          return;
        } elseif (preg_match("/ton/", $hai)) {
          return;
        } elseif (preg_match("/nan/", $hai)) {
          return;
        } elseif (preg_match("/sha/", $hai)) {
          return;
        } elseif (preg_match("/pei/", $hai)) {
          return;
        } elseif (preg_match("/haku/", $hai)) {
          return;
        } elseif (preg_match("/hatu/", $hai)) {
          return;
        } elseif (preg_match("/chun/", $hai)) {
          return;
        }
      }
    }
    if (preg_match("/p-/", $hai)) {
      foreach ($tehai as $hai) {
        if (preg_match("/m-/", $hai) || preg_match("/s-/", $hai)) {
          return;
        } elseif (preg_match("/ton/", $hai)) {
          return;
        } elseif (preg_match("/nan/", $hai)) {
          return;
        } elseif (preg_match("/sha/", $hai)) {
          return;
        } elseif (preg_match("/pei/", $hai)) {
          return;
        } elseif (preg_match("/haku/", $hai)) {
          return;
        } elseif (preg_match("/hatu/", $hai)) {
          return;
        } elseif (preg_match("/chun/", $hai)) {
          return;
        }
      }
    }
    if (preg_match("/s-/", $hai)) {
      foreach ($tehai as $hai) {
        if (preg_match("/m-/", $hai) || preg_match("/p-/", $hai)) {
          return;
        } elseif (preg_match("/ton/", $hai)) {
          return;
        } elseif (preg_match("/nan/", $hai)) {
          return;
        } elseif (preg_match("/sha/", $hai)) {
          return;
        } elseif (preg_match("/pei/", $hai)) {
          return;
        } elseif (preg_match("/haku/", $hai)) {
          return;
        } elseif (preg_match("/hatu/", $hai)) {
          return;
        } elseif (preg_match("/chun/", $hai)) {
          return;
        }
      }
    }
  }
  if ($joukens[5] == "naki") {
    return 5;
  } else {
    return 6;
  }
}

function toitoi($tehai,$joukens)
{
  $anko_count = array_count_values($tehai);
  $count_2 = 0;

  if ($joukens[5] == "naki") {
    foreach ($anko_count as $anko) {
      switch ($anko) {
        case 1:
          return;
        case 4:
          return;
        case 2:
          if ($count_2 === 1) {
            return;
          } else {
            $count_2++;
          }
          break;
        default:
          break;
      }
    }
    return 2;
  }
}

function chanta($tehai,$joukens,$junchan)
{
  if ($junchan !== null) {
    return;
  }

  foreach ($tehai as $hai) {
    for ($i = 4; $i <= 6; $i++) {
      if (preg_match("/-{$i}/", $hai)) {
        return;
      }
    }
  }

  $manzu_array = [];
  $pinzu_array = [];
  $souzu_array = [];

  foreach ($tehai as $hai) {
    if (preg_match("/m-/", $hai)) {
      $manzu_array[] = $hai;
    } elseif (preg_match("/p-/", $hai)) {
      $pinzu_array[] = $hai;
    } elseif (preg_match("/s-/", $hai)) {
      $souzu_array[] = $hai;
    }
  }

  $manzu_num = [];
  $pinzu_num = [];
  $souzu_num = [];

  foreach ($manzu_array as $manzu) {
    $manzu_num[] = substr($manzu, -1);
  }
  foreach ($pinzu_array as $pinzu) {
    $pinzu_num[] = substr($pinzu, -1);
  }
  foreach ($souzu_array as $souzu) {
    $souzu_num[] = substr($souzu, -1);
  }

  $check_123 = [1, 2, 3];
  $check_789 = [7, 8, 9];

  foreach ($manzu_num as $manzu) {
    switch ($manzu) {
      case 2:
        $check = array_intersect($manzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 3:
        $check = array_intersect($manzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 7:
        $check = array_values(array_intersect($manzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      case 8:
        $check = array_values(array_intersect($manzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      default:
    }
  }

  foreach ($pinzu_num as $pinzu) {
    switch ($pinzu) {
      case 2:
        $check = array_intersect($pinzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 3:
        $check = array_intersect($pinzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 7:
        $check = array_values(array_intersect($pinzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      case 8:
        $check = array_values(array_intersect($pinzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      default:
    }
  }

  foreach ($souzu_num as $souzu) {
    switch ($souzu) {
      case 2:
        $check = array_intersect($souzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 3:
        $check = array_intersect($souzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 7:
        $check = array_values(array_intersect($souzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      case 8:
        $check = array_values(array_intersect($souzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      default:
    }
  }

  if ($joukens[5] === "naki") {
    return 1;
  } else {
    return 2;
  }
}

function junchan($tehai,$joukens)
{
  foreach ($tehai as $hai) {
    for ($i = 4; $i <= 6; $i++) {
      if (preg_match("/-{$i}/", $hai)) {
        return;
      }
    }
    if (preg_match("/ton/", $hai)) {
      return;
    } elseif (preg_match("/nan/", $hai)) {
      return;
    } elseif (preg_match("/sha/", $hai)) {
      return;
    } elseif (preg_match("/pei/", $hai)) {
      return;
    } elseif (preg_match("/haku/", $hai)) {
      return;
    } elseif (preg_match("/hatu/", $hai)) {
      return;
    } elseif (preg_match("/chun/", $hai)) {
      return;
    }
  }

  $manzu_array = [];
  $pinzu_array = [];
  $souzu_array = [];

  foreach ($tehai as $hai) {
    if (preg_match("/m-/", $hai)) {
      $manzu_array[] = $hai;
    } elseif (preg_match("/p-/", $hai)) {
      $pinzu_array[] = $hai;
    } elseif (preg_match("/s-/", $hai)) {
      $souzu_array[] = $hai;
    }
  }

  $manzu_num = [];
  $pinzu_num = [];
  $souzu_num = [];

  foreach ($manzu_array as $manzu) {
    $manzu_num[] = substr($manzu, -1);
  }
  foreach ($pinzu_array as $pinzu) {
    $pinzu_num[] = substr($pinzu, -1);
  }
  foreach ($souzu_array as $souzu) {
    $souzu_num[] = substr($souzu, -1);
  }

  $check_123 = [1, 2, 3];
  $check_789 = [7, 8, 9];

  foreach ($manzu_num as $manzu) {
    switch ($manzu) {
      case 2:
        $check = array_intersect($manzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 3:
        $check = array_intersect($manzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 7:
        $check = array_values(array_intersect($manzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      case 8:
        $check = array_values(array_intersect($manzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      default:
    }
  }

  foreach ($pinzu_num as $pinzu) {
    switch ($pinzu) {
      case 2:
        $check = array_intersect($pinzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 3:
        $check = array_intersect($pinzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 7:
        $check = array_values(array_intersect($pinzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      case 8:
        $check = array_values(array_intersect($pinzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      default:
    }
  }

  foreach ($souzu_num as $souzu) {
    switch ($souzu) {
      case 2:
        $check = array_intersect($souzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 3:
        $check = array_intersect($souzu_num, $check_123);
        if ($check != $check_123) {
          return;
        }
        break;
      case 7:
        $check = array_values(array_intersect($souzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      case 8:
        $check = array_values(array_intersect($souzu_num, $check_789));
        if ($check != $check_789) {
          return;
        }
        break;
      default:
    }
  }

  if ($joukens[5] === "naki") {
    return 2;
  } else {
    return 3;
  }
}

function i_pe_kou($tehai,$joukens,$ryan_pe_kou)
{
  $manzu_array = [];
  $pinzu_array = [];
  $souzu_array = [];

  if ($ryan_pe_kou !== null) {
    return;
  }

  foreach ($tehai as $hai) {
    if (preg_match("/m-/", $hai)) {
      $manzu_array[] = $hai;
    } elseif (preg_match("/p-/", $hai)) {
      $pinzu_array[] = $hai;
    } elseif (preg_match("/s-/", $hai)) {
      $souzu_array[] = $hai;
    }
  }

  $manzu_num = [];
  $pinzu_num = [];
  $souzu_num = [];

  foreach ($manzu_array as $manzu) {
    $manzu_num[] = substr($manzu, -1);
  }
  foreach ($pinzu_array as $pinzu) {
    $pinzu_num[] = substr($pinzu, -1);
  }
  foreach ($souzu_array as $souzu) {
    $souzu_num[] = substr($souzu, -1);
  }

  $i_pei = [
    [1, 1, 2, 2, 3, 3],
    [2, 2, 3, 3, 4, 4],
    [3, 3, 4, 4, 5, 5],
    [4, 4, 5, 5, 6, 6],
    [5, 5, 6, 6, 7, 7],
    [6, 6, 7, 7, 8, 8],
    [7, 7, 8, 8, 9, 9],
  ];

  $i_pei_m = [];
  $i_pei_p = [];
  $i_pei_s = [];

  if ($joukens[5] !== "naki") {
    for ($i = 0; $i < 7; $i++) {
      $i_pei_m[] = array_values(array_intersect($manzu_num,$i_pei[$i]));
      $i_pei_p[] = array_values(array_intersect($pinzu_num,$i_pei[$i]));
      $i_pei_s[] = array_values(array_intersect($souzu_num,$i_pei[$i]));
    }
  } else {
    return;
  }

  foreach ($i_pei_m as $m) {
    for ($i = 0; $i < 7; $i++) {
      if ($m == $i_pei[$i]) {
        return 1;
      }
    }
  }
  foreach ($i_pei_p as $p) {
    for ($i = 0; $i < 7; $i++) {
      if ($p == $i_pei[$i]) {
        return 1;
      }
    }
  }
  foreach ($i_pei_s as $s) {
    for ($i = 0; $i < 7; $i++) {
      if ($s == $i_pei[$i]) {
        return 1;
      }
    }
  }

  return;
}

function ryan_pe_kou($tehai,$joukens)
{
  $anko_count = array_count_values($tehai);

  if ($joukens[5] !== "naki") {
    foreach ($anko_count as $count) {
      if ($count !== 2) {
        return;
      }
    }
  }

  $manzu_array = [];
  $pinzu_array = [];
  $souzu_array = [];

  foreach ($tehai as $hai) {
    if (preg_match("/m-/", $hai)) {
      $manzu_array[] = $hai;
    } elseif (preg_match("/p-/", $hai)) {
      $pinzu_array[] = $hai;
    } elseif (preg_match("/s-/", $hai)) {
      $souzu_array[] = $hai;
    }
  }

  $manzu_num = [];
  $pinzu_num = [];
  $souzu_num = [];

  foreach ($manzu_array as $manzu) {
    $manzu_num[] = substr($manzu, -1);
  }
  foreach ($pinzu_array as $pinzu) {
    $pinzu_num[] = substr($pinzu, -1);
  }
  foreach ($souzu_array as $souzu) {
    $souzu_num[] = substr($souzu, -1);
  }

  $i_pei = [
    [1, 1, 2, 2, 3, 3],
    [2, 2, 3, 3, 4, 4],
    [3, 3, 4, 4, 5, 5],
    [4, 4, 5, 5, 6, 6],
    [5, 5, 6, 6, 7, 7],
    [6, 6, 7, 7, 8, 8],
    [7, 7, 8, 8, 9, 9],
  ];

  $i_pei_m = [];
  $i_pei_p = [];
  $i_pei_s = [];


  if ($joukens[5] !== "naki") {
    for ($i = 0; $i < 7; $i++) {
      $i_pei_m[] = array_values(array_intersect($manzu_num,$i_pei[$i]));
      $i_pei_p[] = array_values(array_intersect($pinzu_num,$i_pei[$i]));
      $i_pei_s[] = array_values(array_intersect($souzu_num,$i_pei[$i]));
    }
  } else {
    return;
  }

  $check = 0;

  foreach ($i_pei_m as $m) {
    for ($i = 0; $i < 7; $i++) {
      if ($m == $i_pei[$i]) {
        $check++;
      }
    }
  }
  foreach ($i_pei_p as $p) {
    for ($i = 0; $i < 7; $i++) {
      if ($p == $i_pei[$i]) {
        $check++;
      }
    }
  }
  foreach ($i_pei_s as $s) {
    for ($i = 0; $i < 7; $i++) {
      if ($s == $i_pei[$i]) {
        $check++;
      }
    }
  }

  if ($check >= 2) {
    return 3;
  }

  return;
}

function sankantu($joukens)
{
  if ($joukens[7] == 3) {
    return 2;
  } else {
    return;
  }
}


/*役牌チェック*/

function ton($tehai,$joukens,$jikaze)
{
  $anko_count = array_count_values($tehai);

  $ton = 0;

  foreach ($tehai as $hai) {
    if (preg_match("/ton/", $hai)) {
      $ton = $hai;
    }
  }

  if ($ton !== "ton") {
    return;
  }

  if ($anko_count["ton"] >= 3) {
    if ($joukens[0] == "ton_b" && $jikaze == "ton_j") {
      return 2;
    } elseif ($joukens[0] == "nan_b" && $jikaze == "ton_j") {
      return 1;
    } elseif ($jikaze == "ton_j" || $joukens[0] == "ton_b") {
      return 1;
    } else {
      return;
    }
  }
  return;
}

function nan($tehai,$joukens,$jikaze)
{
  $anko_count = array_count_values($tehai);

  $nan = 0;

  foreach ($tehai as $hai) {
    if (preg_match("/nan/", $hai)) {
      $nan = $hai;
    }
  }

  if ($nan !== "nan") {
    return;
  }

  if ($anko_count["nan"] >= 3) {
    if ($joukens[0] == "nan_b" && $jikaze == "nan_j") {
      return 2;
    } elseif ($joukens[0] == "ton_b" && $jikaze == "nan_j") {
      return 1;
    } elseif ($jikaze == "nan_j" || $joukens[0] == "nan_b") {
      return 1;
    } else {
      return;
    }
  }
  return;
}

function sha($tehai,$joukens,$jikaze)
{
  $anko_count = array_count_values($tehai);

  $sha = 0;

  foreach ($tehai as $hai) {
    if (preg_match("/sha/", $hai)) {
      $sha = $hai;
    }
  }

  if ($sha !== "sha") {
    return;
  }

  if ($anko_count["sha"] >= 3) {
    if ($jikaze == "sha_j") {
      return 1;
    }
  }
  return;
}

function pei($tehai,$joukens,$jikaze)
{
  $anko_count = array_count_values($tehai);

  $pei = 0;

  foreach ($tehai as $hai) {
    if (preg_match("/pei/", $hai)) {
      $pei = $hai;
    }
  }

  if ($pei !== "pei") {
    return;
  }

  if ($anko_count["pei"] >= 3) {
    if ($jikaze == "pei_j") {
      return 1;
    }
  }
  return;
}

function haku($tehai)
{
  $anko_count = array_count_values($tehai);

  $haku = 0;

  foreach ($tehai as $hai) {
    if (preg_match("/haku/", $hai)) {
      $haku = $hai;
    }
  }

  if ($haku !== "haku") {
    return;
  }

  if ($anko_count["haku"] >= 3) {
    return 1;
  }
  return;
}

function hatu($tehai)
{
  $anko_count = array_count_values($tehai);

  $hatu = 0;

  foreach ($tehai as $hai) {
    if (preg_match("/hatu/", $hai)) {
      $hatu = $hai;
    }
  }

  if ($hatu !== "hatu") {
    return;
  }

  if ($anko_count["hatu"] >= 3) {
    return 1;
  }
  return;
}

function chun($tehai)
{
  $anko_count = array_count_values($tehai);

  $chun = 0;

  foreach ($tehai as $hai) {
    if (preg_match("/chun/", $hai)) {
      $chun = $hai;
    }
  }

  if ($chun !== "chun") {
    return;
  }

  if ($anko_count["chun"] >= 3) {
    return 1;
  }
  return;
}


/*役満計算用*/

function yakuman_check(&$total_han,$yakuman_check)
{
  foreach ($yakuman_check as $yakuman) {
    $total_han += $yakuman;
  }
}

function yakuman_list($kokusi,$su_anko,$daisangen,$daisu_si,$shousu_si,$chu_renputou,$ryu_i_sou,$tu_i_sou,$tinrountou,$su_kantu,&$yakuman_list)
{
  if ($kokusi !== null) {
    $yakuman_list[] = "国士無双";
  }
  if ($su_anko !== null) {
    $yakuman_list[] = "四暗刻";
  }
  if ($daisangen !== null) {
    $yakuman_list[] = "大三元";
  }
  if ($daisu_si !== null) {
    $yakuman_list[] = "大四喜";
  }
  if ($shousu_si !== null) {
    $yakuman_list[] = "小四喜";
  }
  if ($chu_renputou !== null) {
    $yakuman_list[] = "九蓮宝燈";
  }
  if ($ryu_i_sou !== null) {
    $yakuman_list[] = "緑一色";
  }
  if ($tu_i_sou !== null) {
    $yakuman_list[] = "字一色";
  }
  if ($tinrountou !== null) {
    $yakuman_list[] = "清老頭";
  }
  if ($su_kantu !== null) {
    $yakuman_list[] = "四槓子";
  }
}

function jouken_check(&$total_han,$reach,$tumo_ron,$rinshan,$pinhu,$dora)
{
  if ($reach !== null) {
    $total_han += $reach;
  }
  if ($tumo_ron !== null) {
    $total_han += $tumo_ron;
  }
  if ($rinshan !== null) {
    $total_han += $rinshan;
  }
  if ($pinhu !== null) {
    $total_han += $pinhu;
  }
  if ($dora !== "0") {
    $total_han += $dora;
  }
}

function jouken_list(&$jouken_list,$reach,$tumo_ron,$rinshan,$pinhu,$dora)
{
  if ($reach !== null) {
    $jouken_list[] = "リーチ";
  }
  if ($tumo_ron !== null) {
    $jouken_list[] = "自摸";
  }
  if ($rinshan) {
    $jouken_list[] = "嶺上開花";
  }
  if ($pinhu !== null) {
    $jouken_list[] = "平和";
  }
  if ($dora !== "0") {
    $jouken_list[] = "ドラ×{$dora}";
  }
}

function yaku_check($yaku_check,&$total_han)
{
  foreach ($yaku_check as $yaku) {
    $total_han += $yaku;
  }
}

function yaku_list(&$yaku_list,$yaku_check)
{
  if ($yaku_check[0] !== null) {
    $yaku_list[] = "東";
  }
  if ($yaku_check[1] !== null) {
    $yaku_list[] = "南";
  }
  if ($yaku_check[2] !== null) {
    $yaku_list[] = "西";
  }
  if ($yaku_check[3] !== null) {
    $yaku_list[] = "北";
  }
  if ($yaku_check[4] !== null) {
    $yaku_list[] = "白";
  }
  if ($yaku_check[5] !== null) {
    $yaku_list[] = "發";
  }
  if ($yaku_check[6] !== null) {
    $yaku_list[] = "中";
  }
  if ($yaku_check[7] !== null) {
    $yaku_list[] = "断么";
  }
  if ($yaku_check[8] !== null) {
    $yaku_list[] = "混老頭";
  }
  if ($yaku_check[9] !== null) {
    $yaku_list[] = "三色同刻";
  }
  if ($yaku_check[10] !== null) {
    $yaku_list[] = "小三元";
  }
  if ($yaku_check[11] !== null) {
    $yaku_list[] = "三暗刻";
  }
  if ($yaku_check[12] !== null) {
    $yaku_list[] = "三色同順";
  }
  if ($yaku_check[13] !== null) {
    $yaku_list[] = "一気通貫";
  }
  if ($yaku_check[14] !== null) {
    $yaku_list[] = "対々和";
  }
  if ($yaku_check[15] !== null) {
    $yaku_list[] = "三槓子";
  }
  if ($yaku_check[16] !== null) {
    $yaku_list[] = "清一色";
  }
  if ($yaku_check[17] !== null) {
    $yaku_list[] = "混一色";
  }
  if ($yaku_check[18] !== null) {
    $yaku_list[] = "二盃口";
  }
  if ($yaku_check[19] !== null) {
    $yaku_list[] = "一盃口";
  }
  if ($yaku_check[20] !== null) {
    $yaku_list[] = "純全帯么九";
  }
  if ($yaku_check[21] !== null) {
    $yaku_list[] = "全帯幺九";
  }
  if ($yaku_check[22] !== null) {
    $yaku_list[] = "七対子";
  }
}

function result_score($score,$joukens,$renchan)
{
  if($score>=13){
    $score=13;
  }

  if (($joukens[0] == "ton_b" && $joukens[1] == "ton_j") || ($joukens[0] == "nan_b" && $joukens[1] == "ton_j")) {
    switch($score){
      case 1:
        return 1500+$renchan;
        break;
      case 2:
        return 2900+$renchan;
        break;
      case 3:
        return 5800+$renchan;
        break;
      case 4:
        return 12000+$renchan;
        break;
      case 5:
        return 12000+$renchan;
        break;
      case 6:
        return 18000+$renchan;
        break;
      case 7:
        return 18000+$renchan;
        break;
      case 8:
        return 24000+$renchan;
        break;
      case 9:
        return 24000+$renchan;
        break;
      case 10:
        return 24000+$renchan;
        break;
      case 11:
        return 36000+$renchan;
        break;
      case 12:
        return 36000+$renchan;
        break;
      case 13:
        return 48000;
        break;
      default:
    }
  }
  else {
    switch($score){
      case 1:
        return 1000+$renchan;
        break;
      case 2:
        return 2000+$renchan;
        break;
      case 3:
        return 3900+$renchan;
        break;
      case 4:
        return 8000+$renchan;
        break;
      case 5:
        return 8000+$renchan;
        break;
      case 6:
        return 12000+$renchan;
        break;
      case 7:
        return 12000+$renchan;
        break;
      case 8:
        return 16000+$renchan;
        break;
      case 9:
        return 16000+$renchan;
        break;
      case 10:
        return 16000+$renchan;
        break;
      case 11:
        return 24000+$renchan;
        break;
      case 12:
        return 24000+$renchan;
        break;
      case 13:
        return 32000;
        break;
      default:
    }
  }
}
