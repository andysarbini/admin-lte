@extends('layouts.backend-dashboard.app')
@section('title', 'Add Posts')
@section('breadcrumb', 'Posts / Create')
@section('content')
    @include('posts.create.html')
@endsection

@section('extra_javascript')
    @include('posts.create.javascript')
@endsection