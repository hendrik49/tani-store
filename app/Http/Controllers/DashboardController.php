<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     
     */
    public function index()
    {
        return view('admin.layout.layout');
    }

    	public function __construct()
		{
		    $this->middleware('auth');
    	}


    public function dashboard()
    {
    		$chart_line = DB::table('chart_line')
            ->get();
			$chart_bar = DB::table('chart_bar')
            ->get();            
            $chart_pie = DB::table('chart_pie')
            ->get();
            $chart_radar = DB::table('t_products_rate')
            ->get();
            return compact('chart_pie','chart_bar','chart_line','chart_radar');
    }

}
