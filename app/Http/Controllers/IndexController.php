<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Convenio;
use App\TipoResol;
use App\TipoConv1;
use Yajra\Datatables\Facades\Datatables;
use DB;
use Input;

/**
 * Class FrontendController.
 */
class IndexController extends Controller
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
        SELECT DISTINCT EXTRACT(YEAR FROM fecha_resol) as aa, EXTRACT(MONTH FROM fecha_resol) mm  FROM convenio ORDER BY aa
      "));
        return view('frontend.index2', compact('convenio','tipo_resol','tipo_conv','date'));
    }

    public function DateBys($id,$id2,$id3,$id4)
    {
      if($id2 == 'empty'){
        $id2 = '';
      }
      if($id == 'empty'){
        $id = '';
      }
      if($id4 == 'empty'){
        $id4 = '';
      }
      if($id3 == 'empty'){
        $fe = 1;
        $ff = '9999';
      }else {
        $ff = $id3;
        $fe = $id3;
      }

      $year = DB::select(DB::raw("
        SELECT c.*,t.*,p.*
        FROM convenio c INNER JOIN tipo_resol t on c.tipo_resol = t.id INNER JOIN tipo_conv1 p on c.tipo_conv = p.id
        WHERE c.nro_resol LIKE '%$id%' and c.inst_conv LIKE '%$id2%' and (STR_TO_DATE('31-dec-$ff', '%d-%b-%Y') > c.fecha_resol) and (STR_TO_DATE('01-jan-$fe', '%d-%b-%Y') < c.fecha_resol) and c.tipo_resol LIKE '%$id4%'

      "));
      return $year ;
    }

    public function tipoReso($id)
    {
      $resol= DB::select(DB::raw("
        SELECT *
        FROM convenio
        INNER JOIN tipo_resol on tipo_resol.id = convenio.tipo_resol
        WHERE convenio.tipo_resol = $id
      "));

      return $resol;
    }
    public function tipoConv($id)
    {
      $conv= DB::select(DB::raw("
        SELECT *
        FROM convenio
        INNER JOIN tipo_conv1 on tipo_conv1.id = convenio.tipo_conv
        WHERE convenio.tipo_conv = $id
      "));

      return $conv;
    }
    public function autocompleteajax(Request $request)
    {

      $data = [];
      if($request->has('q')){
            $search = $request->q;
            $data = DB::table("convenio")
            		->select("inst_conv")
            		->where('inst_conv','LIKE',"%$search%")
            		->get();
        }

      return response()->json($data);
    }

    public function autocompleteajax2($id)
    {

      $data = [];
      $xd= DB::select(DB::raw("
        SELECT inst_conv
        FROM convenio
        WHERE inst_conv LIKE '%$id%'
      "));
      foreach ($xd as $query)
    	{
    	    $data[] = ['value' => $query->inst_conv ];
    	}

      return response()->json($data);
    }

    public function autocompleteajax3(){
	     $term = Input::get('term');

	      $results = [];

	       $queries = DB::table('convenio')
		       ->where('inst_conv', 'LIKE', '%'.$term.'%')
		       ->take(5)->get();

    	foreach ($queries as $query)
    	{
    	    $results[] = ['value' => $query->inst_conv ];
    	}
      return Response::json($results);
    }
    public function autocompleteajax4()
    {
      $data = [];

      $term = Input::get('term');
      $xd= DB::select(DB::raw("
        SELECT inst_conv
        FROM convenio
        WHERE inst_conv LIKE '%$term%'
      "));
      foreach ($xd as $query)
    	{
    	    $data[] = ['value' => $query->inst_conv ];
    	}

      return response()->json($data);
    }

    public function autocompleteajax5()
    {
      $data = [];

      $term = Input::get('term');
      $xd= DB::select(DB::raw("
        SELECT nro_resol
        FROM convenio
        WHERE nro_resol LIKE '%$term%'
      "));
      foreach ($xd as $query)
    	{
    	    $data[] = ['value' => $query->nro_resol ];
    	}

      return response()->json($data);
    }


    /**
     * @return \Illuminate\View\View
     */
}
