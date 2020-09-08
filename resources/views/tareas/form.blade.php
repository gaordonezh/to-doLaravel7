
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
    <form class="row" action="{{ route('tareas.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group offset-lg-3 col-lg-6">
            <input type="text" name="name_tarea" id="name_tarea" class="form-control" placeholder="Type someone">
        </div>
        <div class="form-group offset-lg-3 col-lg-6 text-center">
            <input type="submit" class="btn btn-info" value="ADD">
        </div>
    </form>
</div>

