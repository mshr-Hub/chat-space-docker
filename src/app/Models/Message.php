<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * メッセージを所有するユーザーを取得
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * メッセージを所有するグループを取得
     *
     * @return void
     */
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }
}
