@extends('layouts.app')
@section('title', 'メッセージ一覧')

@section('content')
<!-- messages@index -->
<div class="wrapper">
    @include('messages._side_bar', ['user' => $user])
    @include('messages._main_chat')
</div>
@endsection
