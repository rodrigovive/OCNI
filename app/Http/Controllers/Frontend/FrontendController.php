<?php

namespace App\Http\Controllers\Frontend;
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
class FrontendController extends Controller
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
         $year = DB::select(DB::raw("
           SELECT c.*,t.*,p.*
           FROM convenio c INNER JOIN tipo_resol t on c.tipo_resol = t.id INNER JOIN tipo_conv1 p on c.tipo_conv = p.id
           "));
           //return redirect('homepage');

         return view('portada.index2', compact('convenio','tipo_resol','tipo_conv','date','year'));
     }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
