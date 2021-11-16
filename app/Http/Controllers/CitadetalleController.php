<?php

namespace App\Http\Controllers;

use App\Citadetalle;
use Illuminate\Http\Request;

class CitadetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('citadetallevue.index');
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
     * @param  \App\Citadetalle  $citadetalle
     * @return \Illuminate\Http\Response
     */
    public function show(Citadetalle $citadetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citadetalle  $citadetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(Citadetalle $citadetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citadetalle  $citadetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citadetalle $citadetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citadetalle  $citadetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citadetalle $citadetalle)
    {
        //
    }
}
