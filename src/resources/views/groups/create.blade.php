@extends('layouts.app')
@section('title', '新規グループ作成')

@section('content')
<!-- groups@create -->
<div class="wrapper">
    <h1>新規グループ作成</h1>
    @include('groups._form')
</div>
@endsection
