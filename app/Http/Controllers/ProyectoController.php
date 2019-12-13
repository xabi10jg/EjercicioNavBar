<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Empleado;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $proyectos=Proyecto::all(); 

        return view('proyectos.Proyectos',['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.crearproyecto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'nombre' => 'required',
            'titulo' => 'required',
            'finicio' => 'required|date',
            'ffin' => 'required|date|after:finicio',
            'hestimadas' => 'required|numeric',
            'eencargado' => 'required|numeric'
            
        ]);


        $proyecto = new Proyecto;
        $proyecto->nombre = $request -> input('nombre');
        $proyecto->titulo = $request -> input('titulo');
        $proyecto->fechainicio = $request -> input('finicio');
        $proyecto->fechafin = $request -> input('ffin');
        $proyecto->horasestimadas = $request -> input('hestimadas');
        $proyecto->empleado_id = $request -> input('eencargado');
        $proyecto->save();
        return redirect(route('proyectos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id){

        $proyectos=Proyecto::where('id',$id)->get();

        return view('proyectos/Proyecto')->with(['proyectos'=>$proyectos]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $proyectos = Proyecto::find($id);
        return view('proyectos.editarproyecto')->with(['proyectos' => $proyectos]);
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
        $request->validate([

            'titulo' => 'required',
            'finicio' => 'required|date',
            'ffin' => 'required|date|after:finicio',
            'hestimadas' => 'required|numeric',
            'eencargado' => 'required|numeric'
            
        ]);

        $proyecto = Proyecto::find($id);
        $proyecto->titulo = $request -> input('titulo');
        $proyecto->fechainicio = $request -> input('finicio');
        $proyecto->fechafin = $request -> input('ffin');
        $proyecto->horasestimadas = $request -> input('hestimadas');
        $proyecto->empleado_id = $request -> input('eencargado');
        $proyecto->save();

        return redirect(route('proyectos.show',$proyecto->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $protecto = Proyecto::find($id);
        $proyecto->delete();
        return redirect(route('proyectos.index'));
    }
}
