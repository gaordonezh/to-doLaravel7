@extends('layouts.app')
@section('content')
<hr>
@include('tareas.form')
    <div class="card-body table-responsive">
    
        <table class="table table-lg table-dark">
            <thead>
                <tr>
                    <th scope="col">Fecha/Hora</th>
                    <th scope="col">Tarea</th>
                </tr>
            </thead>
            <tbody>
                @if(count([$tareas]) > 0)
                    @foreach($tareas as $tarea)
                        <tr>
                            <td>{{ $tarea->created_at }}</td>
                            <td><a style="text-transform:uppercase" href="{{ route('tareas.show', $tarea->id ) }}">{{ $tarea->tarea_nombre }}</a></td>
                            <td style="display:flex;">
                                <a href="{{  route('tareas.edit', $tarea->id) }}" class="btn btn-info">Editar</a>
                                <form action="{{  route('tareas.destroy', $tarea->id) }}" method="POST" style="margin-left:5px">
                                    {{  csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $tareas->links() }}
    </div>
@endsection
