<?php

namespace App\Http\Controllers;

use App\TipoConv1;
use Illuminate\Http\Request;

class TipoConvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoConv = TipoConv1::paginate(25);

        return view('tipoConvenio.index',compact('tipoConv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipoConv = TipoConv1::all();

        return view('tipoConvenio.create',compact('tipoConv'));
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
        $tipoConv = new TipoConv1;

        $tipoConv->nomb_tipo_conv1 = $request->nombr_tipo_conv;
        
        $tipoConv->save();

        return redirect('tipo/convenio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoConv1  $tipoConv1
     * @return \Illuminate\Http\Response
     */
    public function show(TipoConv1 $tipoConv1)
    {
        //
        $tipoConv = TipoConv::findOrFail($id);

        return view('tipoConvenio.show',compact('tipoConv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoConv1  $tipoConv1
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoConv1 $tipoConv1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoConv1  $tipoConv1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoConv1 $tipoConv1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoConv1  $tipoConv1
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoConv1 $tipoConv1)
    {
        //
    }
}
