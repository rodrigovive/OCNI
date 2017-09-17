<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TipoResol;
use Illuminate\Http\Request;
use Session;

use App\Proveedor;

class TipoResolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tipoResol = TipoResol::paginate(25);

        return view('tipoResol.index', compact('tipoResol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tipoResol = TipoResol::all();

        return view('tipoResol.create', compact('tipoResol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $tipoResol = new TipoResol;

        $tipoResol->nombr_tipo_resol= $request->nombr_tipo_resol;
        $tipoResol->descripcion= $request->descripcion;

        $tipoResol->save();

        return redirect('tipo/resolucion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tipoResol = TipoResol::findOrFail($id);

        return view('tipoResols.show', compact('tipoResol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tipoResol = Proveedor::all();

        $tipoResol = TipoResol::findOrFail($id);

        return view('tipoResols.edit', compact('tipoResol', 'tipoResol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();

        $tipoResol = TipoResol::findOrFail($id);
        $tipoResol->update($requestData);

        Session::flash('flash_message', 'tipoResol updated!');

        return redirect('tipoResol/tipoResols');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        TipoResol::destroy($id);

        Session::flash('flash_message', 'tipoResol deleted!');

        return redirect('tipoResol/tipoResols');
    }
}
