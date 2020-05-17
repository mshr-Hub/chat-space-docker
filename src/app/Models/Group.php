<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * 書き込み防止パラメーター（ブラックリスト）
     */
    protected $guarded = ['id'];

    /**
     * グループに関連するメッセージを取得
     *
     * @return void
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

    /**
     * グループに関連するユーザーを取得
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
