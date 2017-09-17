<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Convenio;
use App\TipoResol;
use App\TipoConv1;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* Eloquent */
    public function index(Request $request)
    {
        //$convenios = Convenio::all();
        $convenios = Convenio::join('tipo_resol', 'tipo_resol.id', '=', 'convenio.tipo_resol')
            ->join('tipo_conv1','tipo_conv1.id','=','convenio.tipo_conv')
            ->select('convenio.*','tipo_resol.nombr_tipo_resol as nombr_tipo_resol','tipo_conv1.nomb_tipo_conv1 as nomb_tipo_conv1')
            ->orderBy('updated_at', 'desc')
            ->get();        // $tipo_resol = TipoResol::where('')

        return view('convenios.index', compact('convenios'));
        // if($request->ajax()){
        //   return Datatables::queryBuilder(DB::table('convenio')
        //               ->join('tipo_resol','tipo_resol.id','=','convenio.id')
        //               // ->join('products','products.id','=','orders.product_id')
        //               //->orderBy('orders.created_at','DESC')
        //               ->select('tipo_resol.nombr_tipo_resol as tipo'))->make(true);
        // }

        /*if($request->ajax()){
          return Datatables::eloquent(convenio::query())->make(true);
        }*/
        // foreach ($tipo_resol as $key => $value) {
        //     $tipo_resol[$key]->convenios = TipoResol::where('id', $value->id)->get();
        // }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_resol = TipoResol::all();
        $tipo_conv = TipoConv1::all();

        return view('convenios.create',compact('tipo_resol','tipo_conv'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $convenio = new Convenio;

        $convenio->tipo_resol = $request->tipo_resol;
        $convenio->finalidad = $request->finalidad;
        $convenio->inst_conv = $request->inst_conv;
        $convenio->nro_resol = $request->nro_resol;
        $convenio->tipo_conv = $request->tipo_conv;
        $convenio->vigencia_fn = $request->vigencia_fn;
        $convenio->vigencia_in= $request->vigencia_in;
        $convenio->fecha_resol= $request->fecha_resol;
        $convenio->programa= $request->programa;
        $convenio->save();

        return redirect('/convenio/convenios');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $convenio = Convenio::findOrFail($id);
      $tipo_resol = TipoResol::find($convenio->tipo_resol);
      $tipo_conv = TipoConv1::find($convenio->tipo_conv);
      return view('convenios.show', compact('convenio','tipo_resol','tipo_conv'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenio = Convenio::findOrFail($id);
        $tipo_resol = TipoResol::all();
        $tipo_conv = TipoConv1::all();
        return view('convenios.edit', compact('convenio','tipo_resol','tipo_conv'));//

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $convenio = convenio::find($id);

        $convenio->finalidad = $request->finalidad;
        $convenio->inst_conv = $request->inst_conv;
        $convenio->nro_resol = $request->nro_resol;
        $convenio->tipo_conv = $request->tipo_conv;
        $convenio->tipo_resol = $request->tipo_resol;
        $convenio->vigencia_fn = $request->vigencia_fn;
        $convenio->vigencia_in = $request->vigencia_in;
        $convenio->fecha_resol= $request->fecha_resol;
        $convenio->programa= $request->programa;

        $convenio->save();


        return redirect('/convenio/convenios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convenio = convenio::find($id);
        $convenio->delete();
        return redirect('/convenio/convenios');
    }

}
