<?php

namespace App\Http\Controllers;
use App\Models\procesa;
use Illuminate\Http\Request;


class ProcesasController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'namePersona' => 'required|min:3',
            'namePizza' => 'required|min:3',
            'tamano'=>'required',
            'direccion'=>'required'
            

        ]);

        procesa::create($request->all());
        
        return redirect()->route('procesa')->with('success', 'Pedido Exitoso');


    }
}
