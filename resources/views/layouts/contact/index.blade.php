@extends('layouts.app1')

@section('title', 'Page Title')

@section('sidebar')
    @parent


    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
{{$first}} {{$last}}

    <p>This is my body content.</p>

@endsection