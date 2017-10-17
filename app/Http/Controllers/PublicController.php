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
			$perikanan = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Perikanan')
										->get();
			$kecantikan = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Kecantikan')
										->get();
			$peternakan = Products::orderBy('t_products.created_at','DESC')
			->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
			->WHERE('t_products.category','Peternakan')
			->get();
			$kesehatan = Products::orderBy('t_products.created_at','DESC')
			->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
			->WHERE('t_products.category','Kesehatan')
			->get();
			$pertanian = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Pertanian')
										->get();
			$otomotif = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Otomotif')
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
				return view('admin.board-admin', compact('master_datas','dashboard_count','player_count','perikanan','kecantikan','kesehatan','pertanian','peternakan','otomotif','nav'));	
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
			$perikanan = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Perikanan')
										->get();
			$kecantikan = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Kecantikan')
										->get();
			$kesehatan = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Kesehatan')
										->get();
			$peternakan = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Peternakan')
										->get();
			$pertanian = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Pertanian')
										->get();
			$otomotif = Products::orderBy('t_products.created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Otomotif')
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
				return view('admin.home-admin', compact('master_datas','dashboard_count','peternakan','player_count','perikanan','kecantikan','kesehatan','pertanian','otomotif'));	
			}
	}
	

		
	public function play($id)
		    {
				$master_datum = DB::table('t_products')
						->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						->join('t_rate', 't_rate.id_product', '=', 't_products.id','left outer')
						->select(DB::raw('t_products.id,t_products.name,t_products.name,t_products.desc,t_products.url,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate, t_rate.user_name,t_rate.rate,t_rate.comment,t_rate.created_at'))
						->where('t_products.id',$id)
						->first();

				$master_datas = DB::table('t_products')
						->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						->join('t_rate', 't_rate.id_product', '=', 't_products.id','left outer')
						->select(DB::raw('t_products.id,t_products.name,t_products.name,t_products.desc,t_products.url,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate, t_rate.user_name,t_rate.rate,t_rate.comment,t_rate.created_at'))
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

	public function kecantikan()
		    {
			$nav='kecantikan';
			$master_datas = Products::Where('category','Kecantikan')->orderBy('t_products.created_at','DESC')->get();
			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Kecantikan')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Kecantikan')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Kecantikan')
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
				return view('public.kecantikan', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.kecantikan-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	

	public function perikanan()
		    {
			$nav='perikanan';
			$master_datas = Products::Where('category','Perikanan')->orderBy('t_products.created_at','DESC')->get();

			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Perikanan')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Perikanan')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Perikanan')
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
				return view('public.perikanan', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.perikanan-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	
	
	
	public function kesehatan()
		    {
			$nav='kesehatan';
			$master_datas = Products::Where('category','Kesehatan')->orderBy('t_products.created_at','DESC')->get();

			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Kesehatan')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Kesehatan')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Kesehatan')
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
				return view('public.kesehatan', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.perikanan-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	
	public function otomotif()
		    {
			$nav='sport';
			$master_datas = Products::Where('category','Otomotif')->orderBy('t_products.created_at','DESC')->get();
	
			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Otomotif')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Otomotif')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Otomotif')
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
				return view('public.otomotif', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.otomotif-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	
	public function peternakan()
	{
	$nav='peternakan';
	$master_datas = Products::Where('category','Peternakan')->orderBy('t_products.created_at','DESC')->get();

	$new_product = DB::table('t_products')
								->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
								->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
								->where('t_products.category','Peternakan')
								->orderBy('t_products.id','DESC')
								->get();
	$most_played = DB::table('t_products')
								->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
								->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
								->where('t_products.category','Peternakan')
								->orderBy('t_products.count_play','DESC')
								->get();
	$most_rated = DB::table('t_products')
								->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
								->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
								->where('t_products.category','Peternakan')
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
		return view('public.peternakan', compact('new_product','most_played','most_rated','slider','top_products','nav'));
	}else{
		return view('admin.peternakan-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
	}
}


	public function pertanian()
		    {
			$nav='pertanian';
			$master_datas = Products::Where('category','Pertanian')->orderBy('t_products.created_at','DESC')->get();

			$new_product = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Pertanian')
						                ->orderBy('t_products.id','DESC')
						                ->get();
			$most_played = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Pertanian')
						                ->orderBy('t_products.count_play','DESC')
						                ->get();
			$most_rated = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->where('t_products.category','Pertanian')
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
				return view('public.pertanian', compact('new_product','most_played','most_rated','slider','top_products','nav'));
			}else{
				return view('admin.pertanian-admin', compact('master_datas','new_product','most_played','most_rated','slider','top_products','nav'));	
			}
	}
	
		
	public function detail($id=null)
		    {
		$nav='detail';
		$master_datas = DB::table('t_products')
				                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
				                ->join('t_rate', 't_rate.id_product', '=', 't_products.id','left outer')
				                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate, t_rate.user_name,t_rate.rate,t_rate.comment,t_rate.created_at'))
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
