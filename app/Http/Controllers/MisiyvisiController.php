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
class MisiyvisiController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function Misiandvisi(Request $request)
    {
        return view('portada.misi-visi');
    }
    /**
     * @return \Illuminate\View\View
     */
}