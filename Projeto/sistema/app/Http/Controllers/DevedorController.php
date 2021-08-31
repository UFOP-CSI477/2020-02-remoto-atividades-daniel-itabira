<?php

namespace App\Http\Controllers;

use App\Models\Devedor;
use Illuminate\Http\Request;

class DevedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.devedor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.devedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Devedor::create($request->all());
        return redirect()->route('devedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devedor  $devedor
     * @return \Illuminate\Http\Response
     */
    public function show(Devedor $devedor)
    {
        return view('site.devedor.show', ['devedor' => $devedor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devedor  $devedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Devedor $devedor)
    {
        return view('site.devedor.edit', ['devedor' => $devedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devedor  $devedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devedor $devedor)
    {
        $credor->fill($request->all());
        $credor->save();

        return redirect()->route('devedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devedor  $devedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devedor $devedor)
    {
        $devedor->delete();

        return redirect()->route('devedor.index');
    }
}
