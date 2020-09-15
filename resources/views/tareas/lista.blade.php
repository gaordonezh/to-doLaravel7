@extends('layouts.app')
@section('content')
    <h3 style="color: white">{{ $tarea->tarea_nombre }}</h3>
    <span class="badge badge-info">{{ $tarea->created_at->format('F d, Y') }}</span> <span class="badge badge-info">{{ $tarea->created_at->format('H:i a') }} </span>
    @if( $tarea->estado == 1)
    <h6 class="badge badge-success">Finished</h6>
    @endif
    @if( $tarea->estado == 0)
    <h6 class="badge badge-warning">In Process</h6>
    @endif
    <div class="card-body">
        @include('tareas.detalle.form')
        @include('tareas.detalle.index')
    </div>
@endsection
