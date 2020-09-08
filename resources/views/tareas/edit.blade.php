@extends('layouts.app')
@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Close</button>
        <strong>Error</strong>
        <ul>
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <form class="row" action="{{ route('tareas.update',$tarea->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group offset-lg-3 col-lg-6">
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user" value="{{ $tarea->user }}" class="form-control">
        </div>
        <div class="form-group offset-lg-3 col-lg-6">
            <label for="name_tarea">Tarea</label>
            <input type="text" name="name_tarea" value="{{ $tarea->tarea_nombre }}"  id="name_tarea" class="form-control">
        </div>
        <div class="form-group offset-lg-3 col-lg-6 text-center">
            <input type="submit" class="btn btn-info" value="ACTUALIZAR">
        </div>
    </form>
</div>
@endsection
