<?php

namespace App\Http\Controllers;

use App\Models\Credor;
use Illuminate\Http\Request;

class CredorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('credor');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Credor  $credor
     * @return \Illuminate\Http\Response
     */
    public function show(Credor $credor)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Credor  $credor
     * @return \Illuminate\Http\Response
     */
    public function edit(Credor $credor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Credor  $credor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credor $credor)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Credor  $credor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credor $credor)
    {
        //
    }
}
