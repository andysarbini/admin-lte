@extends('layouts.backend-dashboard.app')
@section('title', 'Posts')
@section('breadcrumb', 'Posts')
@section('content')
    @include('posts.html')
@endsection

@section('extra_javascript')
    @include('posts.javascript')
@endsection