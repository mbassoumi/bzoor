@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Test</h1>
@stop

@section('content')
    @for($i = 0 ; $i<100; $i++)
    <p>Fuck Bzoor</p>
    @endfor
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
