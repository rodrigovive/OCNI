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
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function Contact(Request $request)
    {
        return view('portada.page-contact');
    }
    /**
     * @return \Illuminate\View\View
     */
}
