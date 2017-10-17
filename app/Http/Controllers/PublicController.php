<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\MasterData;
use App\User;
use App\Models\Products;
use App\Models\Plays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use JWTAuth;


class PublicController extends Controller
{
	
	
	/**
	* Show the application dashboard.
		     *
		     * @return \Illuminate\Http\Response
		     */
	
	public function __construct()
		{
		//$		this->middleware('auth');
	}
	
	public function getDataBarChart()
	    {
			$bar_chart =  DB::table('t_products')->get();
			return $bar_chart;
		}

		public function getproducts(Request $request, $take)
		{	
			$user = JWTAuth::parseToken()->toUser();			
			$data = Products::inRandomOrder()->take($take)->skip(0)->get();
			foreach($data as $item){
				$item->url_product = url('/').'/detail/'.$item->id;;
			}
			
			$status=true;
			return compact('status','data');
		}
		
	public function index()
			{
			$master_datas = Products::orderBy('t_products.created_at','DESC')->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')->paginate(9);
			$dashboard_count = DB::table('t_products')
						                ->select(DB::raw('count(t_products.id) as products,sum(t_products.count_play) as played'))
						                ->get();
			$player_count = DB::table('users')
						                ->select(DB::raw('COUNT(users.id) as player'))
						                ->WHERE('users.role',2)
						                ->get();
			$action = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Action')
										->get();
			$adventure = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Adventure')
										->get();
			$casino = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Casual')
										->get();
			$puzzle = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Puzzle')
										->get();
			$sports = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Sports')
										->get();							
			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->orderBy('t_products.id','DESC')
						                ->paginate(9);
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(9);
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->orderBy('t_products_rate.user_rate','DESC')
						                ->paginate(9);
			$slider = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category, t_products.banner, t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(3);
			$top_products = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(9);
			$nav='all';
			if(!Auth::user()||Auth::user()->role==2){
				return view('public.home', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.board-admin', compact('master_datas','dashboard_count','player_count','action','adventure','casino','puzzle','sports','nav'));	
			}
	}

	public function listproducts()
			{
			$master_datas = Products::orderBy('t_products.created_at','DESC')->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')->get();
			$dashboard_count = DB::table('t_products')
						                ->select(DB::raw('count(t_products.id) as products,sum(t_products.count_play) as played'))
						                ->get();
			$player_count = DB::table('users')
						                ->select(DB::raw('COUNT(users.id) as player'))
						                ->WHERE('users.role',2)
						                ->get();
			$action = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Action')
										->get();
			$adventure = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Adventure')
										->get();
			$casino = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Casual')
										->get();
			$arcade = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Arcade')
										->get();
			$puzzle = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Puzzle')
										->get();
			$sports = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Sports')
										->get();							
			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->orderBy('t_products_rate.user_rate','DESC')
						                ->get();
			$slider = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.banner, t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(3);
			$top_products = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(10);
			if(!Auth::user()||Auth::user()->role==2){
				return view('public.home', compact('new_product','most_played','most_rated','slider','top_products'));
			}else{
				return view('admin.home-admin', compact('master_datas','dashboard_count','arcade','player_count','action','adventure','casino','puzzle','sports'));	
			}
	}
	

		
	public function play($id)
		    {
				$master_datum = DB::table('t_products')
						->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						->join('t_rate', 't_rate.id_product', '=', 't_products.id','left outer')
						->select(DB::raw('t_products.id,t_products.name,t_products.name,t_products.desc,t_products.url,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate, t_rate.user_name,t_rate.rate,t_rate.comment,t_rate.t_products.created_at'))
						->where('t_products.id',$id)
						->first();

				$master_datas = DB::table('t_products')
						->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						->join('t_rate', 't_rate.id_product', '=', 't_products.id','left outer')
						->select(DB::raw('t_products.id,t_products.name,t_products.name,t_products.desc,t_products.url,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate, t_rate.user_name,t_rate.rate,t_rate.comment,t_rate.t_products.created_at'))
						->where('t_products.id',$id)
						->paginate(3);

						$top_products = DB::table('t_play_products')
							->join('users', 'users.id', '=', 't_play_products.idplayer','left')						
							->select(DB::raw('users.id,users.name, users.img as img, count(score) as score'))
							->where('idproducts',$id)
							->groupby('users.id')
							->orderby('score','desc')
							->paginate(5);


				$slider = DB::table('t_products')
						        ->select(DB::raw('t_products.id,t_products.name,t_products.desc, t_products.banner, t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						        ->orderBy('t_products.count_play','DESC')
						        ->paginate(3);

						

			if(!Auth::user()){
                return redirect()->guest('login');
			}else if($master_datum == null){
				return $this->index();
			}else{
				$user=Auth::user();				
				$plays = Plays::Where('idproducts',$id)->Where('idplayer',$user->id)->first();
				if($plays==null){
					$plays = new Plays();
					$plays->idplayer = $user->id;
					$plays->idproducts = $id;
					$plays->score = 0;
					$plays->subscription = 5;
					$plays->save();
				}
				$products = Products::Where('id',$id)->first();
				$products->count_play +=1;
				$products->save();				
				$user->coint -=$products->coint;
				$user->save();				
				return view('public.play', compact('user','master_datum','master_datas','top_products','slider'));
			}
	}

	public function adventure()
		    {
			$nav='adventure';
			$master_datas = Products::Where('category','Adventure')->orderBy('t_products.created_at','DESC')->get();
			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Adventure')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Adventure')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Adventure')
						                ->orderBy('t_products_rate.user_rate','DESC')
						                ->get();
			$slider = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.banner,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(3);
			$top_products = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(10);
			if(!Auth::user()||Auth::user()->role==2){
				return view('public.adventure', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.adventure-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	

	public function action()
		    {
			$nav='action';
			$master_datas = Products::Where('category','Action')->orderBy('t_products.created_at','DESC')->get();

			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Action')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Action')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Action')
						                ->orderBy('t_products_rate.user_rate','DESC')
						                ->get();
			$slider = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.banner,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(3);
			$top_products = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(10);
			if(!Auth::user()||Auth::user()->role==2){
				return view('public.action', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.action-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	
	
	
	public function casino()
		    {
			$nav='casino';
			$master_datas = Products::Where('category','Casual')->orderBy('t_products.created_at','DESC')->get();

			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Casual')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Casual')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Casual')
						                ->orderBy('t_products_rate.user_rate','DESC')
						                ->get();
			$slider = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.banner,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(3);
			$top_products = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(10);
			if(!Auth::user()||Auth::user()->role==2){
				return view('public.casino', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.action-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	
	public function sports()
		    {
			$nav='sport';
			$master_datas = Products::Where('category','Sports')->orderBy('t_products.created_at','DESC')->get();
	
			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Sports')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Sports')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Sports')
						                ->orderBy('t_products_rate.user_rate','DESC')
						                ->get();
			$slider = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.banner,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(3);
			$top_products = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(10);
			if(!Auth::user()||Auth::user()->role==2){
				return view('public.sports', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.sports-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	
	public function arcade()
	{
	$nav='arcade';
	$master_datas = Products::Where('category','Arcade')->orderBy('t_products.created_at','DESC')->get();

	$new_product = DB::table('t_products')
								->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
								->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
								->where('t_products.category','Arcade')
								->orderBy('t_products.id','DESC')
								->get();
	$most_played = DB::table('t_products')
								->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
								->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
								->where('t_products.category','Arcade')
								->orderBy('t_products.count_play','DESC')
								->get();
	$most_rated = DB::table('t_products')
								->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
								->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
								->where('t_products.category','Arcade')
								->orderBy('t_products_rate.user_rate','DESC')
								->get();
	$slider = DB::table('t_products')
								->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.banner,t_products.img,t_products.img_slider'))
								->orderBy('t_products.count_play','DESC')
								->paginate(3);
	$top_products = DB::table('t_products')
								->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
								->orderBy('t_products.count_play','DESC')
								->paginate(10);
	if(!Auth::user()||Auth::user()->role==2){
		return view('public.arcade', compact('new_product','most_played','most_rated','slider','top_products','nav'));
	}else{
		return view('admin.arcade-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
	}
}


	public function puzzle()
		    {
			$nav='puzzle';
			$master_datas = Products::Where('category','Puzzle')->orderBy('t_products.created_at','DESC')->get();

			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Puzzle')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Puzzle')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Puzzle')
						                ->orderBy('t_products_rate.user_rate','DESC')
						                ->get();
			$slider = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.banner,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(3);
			$top_products = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(10);
			if(!Auth::user()||Auth::user()->role==2){
				return view('public.puzzle', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.puzzle-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	
		
	public function detail($id=null)
		    {
		$nav='detail';
		$master_datas = DB::table('t_products')
				                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
				                ->join('t_rate', 't_rate.id_product', '=', 't_products.id','left outer')
				                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate, t_rate.user_name,t_rate.rate,t_rate.comment,t_rate.t_products.created_at'))
				                ->where('t_products.id',$id)
				                ->get();
		$slider = DB::table('t_products')
						        ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.banner,t_products.img,t_products.img_slider'))
						        ->orderBy('t_products.count_play','DESC')
						        ->paginate(3);
		$top_products = DB::table('t_products')
						        ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						        ->orderBy('t_products.count_play','DESC')
						        ->paginate(5);

			if($master_datas){
				return view('public.detail', compact('master_datas','slider','top_products','nav'));
			}else{
				return $this->index();
			}
	}
	
	
}
