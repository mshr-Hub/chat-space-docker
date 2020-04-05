@extends('layouts.app')

@section('content')
<form class="py-5 px-5" action="{{ route('users.update', $user->id) }}" method="POST">@csrf
    <input type="text" value="{{ $user->name }}">
    <input type="email" value="{{ $user->email }}">
    <button type="submit">update</button>
</form>

<form class="py-5 px-5" action="{{ route('logout') }}" method="POST">@csrf
    <button type="submit">logout</button>
</form>
@endsection
