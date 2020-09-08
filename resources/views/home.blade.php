@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{ Auth::user()->name }}</div>

                <div class="card-body table-responsive">
                    <h3></h3>
                    <a href="tareas" class="btn btn-info">IR A TAREAS</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
