<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score as ScoreModel;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Auth;

class UserMypageController extends Controller
{
    public function mypage(){
        $user_id=Auth::id();
        $mydata=ScoreModel::where('user_id',$user_id)->first();
        $user=UserModel::where('id',$user_id)->first();
        $nickname=$user->name;

        $max_score=$mydata->max_score;
        $kokusi=$mydata->kokusi;
        $su_anko = $mydata->su_anko;
        $daisangen = $mydata->daisangen;
        $daisu_si = $mydata->daisu_si;
        $shousu_si = $mydata->shousu_si;
        $chu_renputou = $mydata->chu_renputou;
        $ryu_i_sou = $mydata->ryu_i_sou;
        $tu_i_sou = $mydata->tu_i_sou;
        $tinrountou = $mydata->tinrountou;
        $su_kantu = $mydata->su_kantu;

        return view('/user/mypage',[
            'nickname'=>$nickname,
            'max_score'=>$max_score,
            'kokusi'=>$kokusi,
            'su_anko' => $su_anko,
            'daisangen' => $daisangen,
            'daisu_si' => $daisu_si,
            'shousu_si' => $shousu_si,
            'chu_renputou' => $chu_renputou,
            'ryu_i_sou' => $ryu_i_sou,
            'tu_i_sou' => $tu_i_sou,
            'tinrountou' => $tinrountou,
            'su_kantu' => $su_kantu
        ]);
    }
}
