<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\propiedade;

class PropiedadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Propiedade::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Instanciamos la clase Pokemons
        $propiedade = new Propiedade;
        
        $propiedade->precio = $request->precio;

        $propiedade->descripcion = $request->descripcion;

        $propiedade->estado = $request->estado;
        $propiedade->delegacion = $request->delegacion;
        $propiedade->estatus = $request->estatus;
        
        $propiedade->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Propiedade::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        return Propiedade::where('id', $id)
            ->update([
                     'precio'=> $request->precio,
                     'descripcion'=>$request->descripcion,
                     'estado'=>$request->estado,
                     'delegacion'=>$request->delegacion,
                     'estatus'=>$request->estatus
                 ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Propiedade::where('id', $id)->delete();
    }
}
