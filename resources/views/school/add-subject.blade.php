@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Agregar Asignatura</h1>
        </div>
        <div class="card-body">
        @if(Session::has('subject_created'))
            <div class="alert alert-success" role="alert">
                {{Session::get('subject_created')}}
            </div>
        @endif
        <form method="POST" action="{{route('subject.create')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre de asignatura</label>
                    <input type="text" name="name" class="form-control" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="code">Código de asginatura</label>
                    <input type="text" name="code" class="form-control" placeholder="Ingrese código">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
