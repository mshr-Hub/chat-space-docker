@extends('layouts.template')
@section('title', 'メッセージ一覧')

@section('content')
    <div class="wrapper">
        message@index
        @include('messages._side_bar')
        @include('messages._main_chat')
    </div>
@endsection
