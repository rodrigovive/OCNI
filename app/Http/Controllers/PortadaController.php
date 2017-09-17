<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Convenio;
use App\TipoResol;
use App\TipoConv1;
use Yajra\Datatables\Facades\Datatables;
use DB;
/**
 * Class FrontendController.
 */
class PortadaController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $convenio = Convenio::all();
        $tipo_resol = TipoResol::all();
        $tipo_conv = TipoConv1::all();
        $date = DB::select(DB::raw("
        SELECT DISTINCT EXTRACT(YEAR FROM fecha_resol) as aa FROM convenio ORDER BY aa
      "));
        return view('portada.index2', compact('convenio','tipo_resol','tipo_conv','date'));
    }
    /**
     * @return \Illuminate\View\View
     */
}
