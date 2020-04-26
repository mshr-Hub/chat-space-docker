<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
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
     * グループに関連するメンバーを取得
     *
     * @return void
     */
    public function members()
    {
        return $this->hasMany('App\Models\Member');
    }

    /**
     * グループに関連するユーザーをメンバーを経由して取得
     *
     * @return void
     */
    public function users()
    {
        return $this->hasManyThrough('App\Models\User', 'App\Models\Member');
    }
}
