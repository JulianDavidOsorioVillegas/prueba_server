<?php

namespace App\Http\Controllers;

use App\Materiales;
use Illuminate\Http\Request;

class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = Materiales::latest()->paginate(5);

        return view('materiales.index',compact('materiales'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiales.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Materiales::create($request->all());
       return redirect()->route('materiales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function show(Materiales $materiales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiales $material)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiales $material)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiales $material)
    {
        $material->delete();
        return redirect()->route('materiales.index');
    }
}
