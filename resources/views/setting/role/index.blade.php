
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Test</h1>
@stop

@section('content')
    {!! $datatable !!}

@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
