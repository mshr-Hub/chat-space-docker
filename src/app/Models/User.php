<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * ユーザーに関連するメッセージを取得
     *
     * @return void
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

    /**
     * ユーザーに関連するメンバーを取得
     *
     * @return void
     */
    public function members()
    {
        return $this->hasMany('App\Models\Member');
    }

    /**
     * ユーザーに関連するグループをメンバー経由で取得
     *
     * @return void
     */
    public function groups()
    {
        return $this->hasManyThought('App\Models\Group', 'App\Models\Member');
    }
}
