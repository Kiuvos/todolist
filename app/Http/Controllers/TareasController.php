<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas=Tareas::all();
        return view('tareas.index',compact('tareas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tareas=new Tareas;
        $tareas->descripcion=$request->input('descripcion');
        $tareas->fecha=$request->input('fecha');
        $tareas->realizada=$request->input('realizada');
        $tareas->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tareas $tareas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tareas=Tareas::find($id);
        $tareas->descripcion=$request->input('descripcion');
        $tareas->fecha=$request->input('fecha');
        $tareas->realizada=$request->input('realizada');
        $tareas->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tareas=Tareas::find($id);
        $tareas->delete();
        return redirect()->back();
        //
    }
}
