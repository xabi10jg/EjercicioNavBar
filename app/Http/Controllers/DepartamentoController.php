<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    public function index(){
    	$departamentos=Departamento::all();	

    	return view('departamentos.Departamentos',['departamentos'=>$departamentos]);
    }

    public function show($id){

    	$departamentos=Departamento::where('id',$id)->get();

    	return view('departamentos/Departamento')->with(['departamentos'=>$departamentos]);

    }
}
