<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Message;
use App\Models\User;
use Auth;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $group_id
     * @return \Illuminate\Http\Response
     */
    public function index(int $group_id)
    {
        $user = Auth::user();
        $group = Group::find($group_id);
        return view('messages/index', compact('user', 'group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
