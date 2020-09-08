<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tareas;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $tareas = Tareas::where('user_id', auth()->user()->id)->orderBy('created_at','desc')->paginate(4);
        return view('tareas.index')->with('tareas',$tareas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_tarea' => 'required'
        ]);

        $tarea = new Tareas();
        $tarea->tarea_nombre = $request->input('name_tarea');
        $tarea->user_id = auth()->user()->id;
        $tarea->save();

        return redirect(route('tareas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$tarea = Tareas::where('id',$id)->get();
        $tarea = Tareas::find($id);
        return view('tareas.lista')->with('tarea', $tarea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tareas::find($id);
        return view('tareas.edit')->with('tarea', $tarea);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name_tarea' => 'required'
        ]);

        $tarea = Tareas::find($id);
        $tarea->tarea_nombre = $request->input('name_tarea');
        $tarea->user_id = auth()->user()->id;
        $tarea->save();

        /*
        Tareas::where('id',$id)->update([
            'user'=>$request->input('user'),
            'name_tarea'=>$request->input('name_tarea')
        ]);*/

        return redirect(route('tareas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarea = Tareas::find($id);
        $tarea->destroy($id);
        return redirect(route('tareas.index'));
    }
}
