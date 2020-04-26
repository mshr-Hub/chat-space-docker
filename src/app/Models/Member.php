<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * メンバーを所有しているユーザーを取得
     *
     * @return void
     */
    public function user()
    {
        $this->belongsTo('App\Models\User');
    }

    /**
     * メンバーを所有しているグループを取得
     *
     * @return void
     */
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }
}
