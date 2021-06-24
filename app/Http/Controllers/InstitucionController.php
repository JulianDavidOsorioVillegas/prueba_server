<?php

namespace App\Http\Controllers;

use App\Institucions;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institucion = Institucions::latest()->paginate(5);

        return view('institucion.index',compact('institucion'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('institucion.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Institucions::create($request->all());
        return redirect()->route('institucion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show(Institucion $institucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institucions  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Institucions $institucion)
    {
        return view('institucion.editar',compact('institucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucions  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institucions $institucion)
    {
        $institucion->update($request->all());
        return redirect()->route('institucion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institucions $institucion)
    {
        $institucion->delete();
        return redirect()->route('institucion.index');
    }
}
