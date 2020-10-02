@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Agregar Estudiante</h1>
        </div>
        <div class="card-body">
        @if(Session::has('student_created'))
            <div class="alert alert-success" role="alert">
                {{Session::get('student_created')}}
            </div>
        @endif
        <form method="POST" action="{{route('student.create')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre de estudiante</label>
                    <input type="text" name="name" class="form-control" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono de estudiante</label>
                    <input type="text" name="phone" class="form-control" placeholder="Ingrese teléfono">
                </div>
                <div class="form-group">
                    <label for="phone">Inscribir asignatura</label>
                    <input type="text" name="subject_id" class="form-control" placeholder="Ingrese teléfono">
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
