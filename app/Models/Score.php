<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'max_score',
        'kokusi',
        'su_anko',
        'daisangen',
        'daisu_si',
        'shousu_si',
        'chu_renputou',
        'ryu_i_sou',
        'tu_i_sou',
        'tinrountou',
        'su_kantu',
    ];

    protected $guarded=['id'];
}
