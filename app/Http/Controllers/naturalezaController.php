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
class naturalezaController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function Naturaleza(Request $request)
    {
        return view('portada.natu-fin');
    }
    /**
     * @return \Illuminate\View\View
     */
}
