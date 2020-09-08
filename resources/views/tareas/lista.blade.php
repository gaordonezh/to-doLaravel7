@extends('layouts.app')
@section('content')
    <h1>{{ $tarea->tarea_nombre }}</h1>
    <div class="card-body table-responsive">
        <table class="table table-lg table-dark">
            <thead>
                <tr>
                    <th scope="col">En</th>
                    <th scope="col">Contrucción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>WAIT</td>
                    <td>PLEASE</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
