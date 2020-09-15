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
<section class="row">
    <article class="col-md-4" style="margin-bottom:20px">
        <div class="card text-white bg-dark">
            <div class="card-header">
                <span class="badge badge-secondary">1</span>
                <span class="badge badge-secondary">2</span>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">3</h5>
                
                <span class="badge badge-success">Completed</span>
                <span class="badge badge-warning">Completed</span>
                
                <form action="{{  route('tareas.destroy', $tarea->id) }}" method="POST" style="margin-top:20px" class="text-center">
                    {{  csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="badge badge-danger" style="border:none">Delete</button>
                </form>

            </div>
        </div>
    </article>

    
    
    
    
</section>

