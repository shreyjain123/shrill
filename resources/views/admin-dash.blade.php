@extends('layouts.app')

@section('content')
@include('inc.admin-sidebar')
<div class="wrap">
    @include('inc.posts')
    {{Auth::user()->name}}
</div>
@endsection