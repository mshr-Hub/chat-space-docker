@extends('layouts.app')
@section('title', 'メッセージ一覧')

@section('content')
    <div class="wrapper">
        <!-- messages@index -->
        @include('messages._side_bar')
        @include('messages._main_chat')
    </div>
@endsection
