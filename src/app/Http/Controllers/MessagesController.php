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
     * @param  int  $group_id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(int $group_id, Request $request)
    {
        $message = new Message();
        $user = Auth::user();
        $group = Group::find($group_id);

        if ($request->text || $request->image) {
            $message->fill($request->all())
                    ->user()->associate($user)
                    ->group()->associate($group);
            $message->image = isset($request->image) ? basename($request->image->store('public/messages')) : null;
            $message->save();
        }

        return redirect()->route('groups.messages.index', $group_id);
    }
}
