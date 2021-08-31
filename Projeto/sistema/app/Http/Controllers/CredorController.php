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
        return view('site.credor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('credor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

       
        Credor::create($request->all());

        return redirect()->route('credor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Credor  $credor
     * @return \Illuminate\Http\Response
     */
    public function show(Credor $credor)
    {
        return view('credor.show', ['credor' => $credor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Credor  $credor
     * @return \Illuminate\Http\Response
     */
    public function edit(Credor $credor)
    {
        return view('credor.edit', ['credor' => $credor]);
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
        $credor->fill($request->all());
        $credor->save();

        return redirect()->route('credor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Credor  $credor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credor $credor)
    {
       $credor->delete();
       return redirect()->route('credor.index');
    }
}
