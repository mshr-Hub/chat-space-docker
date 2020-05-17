@extends('layouts.app')
@section('title', 'メッセージ一覧')

@section('content')
<!-- messages@index -->
@include('messages._side_bar')
@include('messages._main_chat')
@endsection
