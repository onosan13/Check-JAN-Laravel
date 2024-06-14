<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckPostRequest;
use App\Http\Requests\ResultPostRequest;

class CheckUserController extends Controller
{
    public function input(){
        return view('/user/input');
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

        return view('user.confirm', [
            'tehais'=>$tehais,
            'joukens'=>$joukens,
            'tehais_count'=>$tehais_count,
            'check'=>$check
        ]);
    }

    public function result(ResultPostRequest $request){
        require_once(app_path('systems/function_yaku.php'));
        $data=$request->validated();

        $joukens=$data['joukens'];//条件一覧
        $tehais=$data['tehais'];//手牌一覧

        //自風
        $jikaze=$joukens[1];

        //ドラの数
        $dora=$joukens[3];

        //条件
        $reach=reach($joukens);
        $renchan=renchan($joukens);
        $tumo_ron=tumo_ron($joukens);
        $rinshan=rinshan($joukens);
        $pinhu=pinhu($tehais,$joukens);

        //タンヤオチェック
        $tanyao=tanyao($tehais);

        /*役満チェック*/
        $kokusi = kokusi($tehais,$joukens);
        $su_anko = su_anko($tehais,$joukens);
        $daisangen = daisangen($tehais);
        $daisu_si = daisu_si($tehais);
        $shousu_si = shousu_si($tehais);
        $chu_renputou = chu_renpoutou($tehais,$joukens);
        $ryu_i_sou = ryu_i_sou($tehais);
        $tu_i_sou = tu_i_sou($tehais);
        $tinrountou = tinrountou($tehais);
        $su_kantu = su_kantu($joukens);

        /*通常役チェック*/
        $honroutou = honroutou($tehais,$joukens);
        $sanshoku_doukou = sanshoku_doukou($tehais);
        $shousangen = shousangen($tehais);
        $sananko = sananko($tehais,$joukens,$su_anko);
        $sanshoku_doujun = sanshoku_doujun($tehais,$joukens);
        $ikkitu_kan = ikkitu_kan($tehais,$joukens);
        $tinitu = tinitu($tehais,$joukens);
        $honitu = honitu($tehais,$joukens,$tinitu);
        $toitoi = toitoi($tehais,$joukens);
        $junchan = junchan($tehais,$joukens);
        $chanta = chanta($tehais,$joukens,$junchan);
        $ryan_pe_kou = ryan_pe_kou($tehais,$joukens);
        $i_pe_kou = i_pe_kou($tehais,$joukens,$ryan_pe_kou);
        $sankantu = sankantu($joukens);

        //七対子チェック
        $ti_toitu = ti_toi($tehais,$ryan_pe_kou,$joukens);

        /*役牌*/
        $ton = ton($tehais,$joukens,$jikaze);
        $nan = nan($tehais,$joukens,$jikaze);
        $sha = sha($tehais,$joukens,$jikaze);
        $pei = pei($tehais,$joukens,$jikaze);
        $haku = haku($tehais);
        $hatu = hatu($tehais);
        $chun = chun($tehais);

        $yaku_check = [
            $ton,
            $nan,
            $sha,
            $pei,
            $haku,
            $hatu,
            $chun,
            $tanyao,
            $honroutou,
            $sanshoku_doukou,
            $shousangen,
            $sananko,
            $sanshoku_doujun,
            $ikkitu_kan,
            $toitoi,
            $sankantu,
            $tinitu,
            $honitu,
            $ryan_pe_kou,
            $i_pe_kou,
            $junchan,
            $chanta,
            $ti_toitu
        ];

        $total_han = 0;
        $yakuman_list = [];
        $jouken_list = [];
        $yaku_list = [];

        $yakuman_check = [
            $kokusi,
            $su_anko,
            $daisangen,
            $daisu_si,
            $shousu_si,
            $chu_renputou,
            $ryu_i_sou,
            $tu_i_sou,
            $tinrountou,
            $su_kantu
        ];
          
        yakuman_check($total_han,$yakuman_check);
        yakuman_list($kokusi,$su_anko,$daisangen,$daisu_si,$shousu_si,$chu_renputou,$ryu_i_sou,$tu_i_sou,$tinrountou,$su_kantu,$yakuman_list);
        jouken_check($total_han,$reach,$tumo_ron,$rinshan,$pinhu,$dora);
        jouken_list($jouken_list,$reach,$tumo_ron,$rinshan,$pinhu,$dora);
        yaku_check($yaku_check,$total_han);
        yaku_list($yaku_list,$yaku_check);

        //計算結果
        $result_score = result_score($total_han,$joukens,$renchan);
        $result_list = array_merge($yakuman_list, $jouken_list, $yaku_list);
        $yaku_message = 0;

        if ($total_han >= 13) {
            $yaku_message = "役満";
        } elseif ($total_han >= 11) {
            $yaku_message = "三倍満";
        } elseif ($total_han >= 8) {
            $yaku_message = "倍満";
        } elseif ($total_han >= 6) {
            $yaku_message = "跳満";
        } elseif ($total_han >= 4) {
            $yaku_message = "満貫";
        } else {
            $yaku_message = null;
        }

        return view('user.result',[
            'yaku_message'=>$yaku_message,
            'result_score'=>$result_score,
            'result_list'=>$result_list,
            'tehais'=>$tehais
        ]);
    }
}
