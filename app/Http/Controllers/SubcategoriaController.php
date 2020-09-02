<?php

namespace App\Http\Controllers;

use App\subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$subcategorias = subcategoria::all();
        $subcategorias = subcategoria::find(1);
        //$subcategorias = new subcategoria();
        $subcategorias->categoria;
        return $subcategorias;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function show(subcategoria $subcategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategoria $subcategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subcategoria $subcategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcategoria $subcategoria)
    {
        //
    }
}
