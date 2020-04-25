@extends('layouts.app')
@section('title', '新規グループ作成')

@section('content')
<!-- groups@create -->
<div class="wrapper">
    @include('groups._form')
</div>
@endsection
