@extends('layouts.app')
@section('content')
<hr>
@include('tareas.form')
    <div class="card-body table-responsive">
    
        <table class="table table-lg table-dark">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Hour</th>
                    <th scope="col">Task</th>
                    <th scope="col">State</th>
                </tr>
            </thead>
            <tbody>
                @if(count([$tareas]) > 0)
                    @foreach($tareas as $tarea)
                        <tr>
                            <td>{{ $tarea->created_at->format('F d, Y') }}</td>
                            <td>{{ $tarea->created_at->format('H:i a') }}</td>
                            <td><a style="text-transform:uppercase" href="{{ route('tareas.show', $tarea->id ) }}">{{ $tarea->tarea_nombre }}</a></td>
                            @if($tarea->estado == 0)
                            <td><span class="badge badge-warning">In Process</span></td>
                            @endif
                            @if($tarea->estado == 1)
                            <td><span class="badge badge-success">Finished</span></td>
                            @endif
                            <td style="display:flex;">
                                <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{  route('tareas.destroy', $tarea->id) }}" method="POST" style="margin-left:5px">
                                    {{  csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger">Delete</button>
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
