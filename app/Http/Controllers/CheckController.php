<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckPostRequest;
use App\Http\Requests\ResultPostRequest;


class CheckController extends Controller
{
    public function input(){
        return view('/check/input');
    }

    public function confirm(CheckPostRequest $request){
        require_once(app_path('systems/function.php'));
        $data=$request->validated();
        $joukens=array_slice($data,0,10);//条件一覧

        $manzu=$data['manzu'];//萬子一覧
        $pinzu=$data['pinzu'];//筒子一覧
        $souzu=$data['souzu'];//索子一覧
        $jihai=$data['jihai'];//字牌一覧

        //萬子選択数
        $m_count_1 = $data['m-count-1'];
        $m_count_2 = $data['m-count-2'];
        $m_count_3 = $data['m-count-3'];
        $m_count_4 = $data['m-count-4'];
        $m_count_5 = $data['m-count-5'];
        $m_count_6 = $data['m-count-6'];
        $m_count_7 = $data['m-count-7'];
        $m_count_8 = $data['m-count-8'];
        $m_count_9 = $data['m-count-9'];

        //筒子選択数
        $p_count_1 = $data['p-count-1'];
        $p_count_2 = $data['p-count-2'];
        $p_count_3 = $data['p-count-3'];
        $p_count_4 = $data['p-count-4'];
        $p_count_5 = $data['p-count-5'];
        $p_count_6 = $data['p-count-6'];
        $p_count_7 = $data['p-count-7'];
        $p_count_8 = $data['p-count-8'];
        $p_count_9 = $data['p-count-9'];

        //索子選択数
        $s_count_1 = $data['s-count-1'];
        $s_count_2 = $data['s-count-2'];
        $s_count_3 = $data['s-count-3'];
        $s_count_4 = $data['s-count-4'];
        $s_count_5 = $data['s-count-5'];
        $s_count_6 = $data['s-count-6'];
        $s_count_7 = $data['s-count-7'];
        $s_count_8 = $data['s-count-8'];
        $s_count_9 = $data['s-count-9'];

        //字牌選択数
        $j_count_ton = $data['j-count-ton'];
        $j_count_nan = $data['j-count-nan'];
        $j_count_sha = $data['j-count-sha'];
        $j_count_pei = $data['j-count-pei'];
        $j_count_haku = $data['j-count-haku'];
        $j_count_hatu = $data['j-count-hatu'];
        $j_count_chun = $data['j-count-chun'];
        
        $manzu_tehai=receive_manzu($manzu,$m_count_1,$m_count_2,$m_count_3,$m_count_4,$m_count_5,$m_count_6,$m_count_7,$m_count_8,$m_count_9);
        $pinzu_tehai=receive_pinzu($pinzu,$p_count_1,$p_count_2,$p_count_3,$p_count_4,$p_count_5,$p_count_6,$p_count_7,$p_count_8,$p_count_9);
        $souzu_tehai=receive_souzu($souzu,$s_count_1,$s_count_2,$s_count_3,$s_count_4,$s_count_5,$s_count_6,$s_count_7,$s_count_8,$s_count_9);
        $jihai_tehai=receive_jihai($jihai,$j_count_ton,$j_count_nan,$j_count_sha,$j_count_pei,$j_count_haku,$j_count_hatu,$j_count_chun);

        //手牌一覧結果
        $tehais=array_merge($manzu_tehai,$pinzu_tehai,$souzu_tehai,$jihai_tehai);

        $tehais_count=count($tehais);
        $check=0;

        return view('check.confirm', [
            'tehais'=>$tehais,
            'joukens'=>$joukens,
            'tehais_count'=>$tehais_count,
            'check'=>$check
        ]);
    }

    public function result(ResultPostRequest $request){
        $data=$request->validated();
        dd($data);
    }
}
