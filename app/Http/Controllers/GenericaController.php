<?php

namespace App\Http\Controllers;

use App\Generica;
use Illuminate\Http\Request;

class GenericaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $datos['genericas']=Generica::paginate(20);
        return view('generica.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       


        return view('generica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $datosGenerica=request()->except('_token');

        Generica::insert($datosGenerica);   
        return redirect('generica');
       // return response()->json($datosGenerica);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Generica  $generica
     * @return \Illuminate\Http\Response
     */
    public function show(Generica $generica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generica  $generica
     * @return \Illuminate\Http\Response
     */
    public function edit($pg_id)
    {
        //
        $generica=Generica::findOrFail($pg_id); 

        return view('generica.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generica  $generica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generica $generica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generica  $generica
     * @return \Illuminate\Http\Response
     */
    public function destroy($pg_id)
    {
        //
        Generica::destroy($pg_id);

        return redirect('generica');

    }
}
