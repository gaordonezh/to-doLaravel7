@extends('layouts.app')

@section('content')

<section class="container">
    <article class="row justify-content-center">
        <main class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{ Auth::user()->name }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom:10px"><a href="tareas" class="btn form-control btn-info">Daily List</a></div>
                        <div class="col-md-6" style="margin-bottom:10px"><a href="#" class="btn form-control btn-info">En construcción</a></div>
                    </div>
                </div>
            </div>
        </main>
    </article>
</section>
@endsection
