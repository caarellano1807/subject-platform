@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Plataforma Estudiantil</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Bienvenido</h1>
        </div>
        <div class="card-body">
            <p>Esta sección es informativa, puedes registrar estudiantes y asignaturas.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
