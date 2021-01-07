<?php

namespace App\Http\Controllers;

use App\Especifica;
use Illuminate\Http\Request;

class EspecificaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['especificas']=Especifica::paginate(20);
        return view('especifica.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('especifica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //       $datosEspecifica=request()->all();

        $datosEspecifica=request()->except('_token');

        Especifica::insert($datosEspecifica);   
        return response()->json($datosEspecifica);
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Especifica  $especifica
     * @return \Illuminate\Http\Response
     */
    public function show(Especifica $especifica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Especifica  $especifica
     * @return \Illuminate\Http\Response
     */
    public function edit($pe_id)
    {
        //
        $especifica=Especifica::findOrFail($pe_id); 

        return view('especifica.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Especificas  $especifica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especifica $especifica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Especifica  $especifica
     * @return \Illuminate\Http\Response
     */
    public function destroy($pe_id)
    {
        //
        Especifica::destroy($pe_id);

        return redirect('especifica');
    }
}
