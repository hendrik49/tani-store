<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\MasterData;
use App\Models\Rate;
use App\User;
use App\Models\Products;
use App\Models\Plays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
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
	
	public function index()
		    {
		if(Auth::user()){
			
			$user = Auth::user();

			if($user->role=='2'){
				$master_datas = DB::table('t_products')
								                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
								                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
								                ->get();
				return view('public.home', compact('master_datas'));
			}
			elseif($user->role=='1'){



			$master_datas = Products::orderBy('created_at','DESC')->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')->get();
			$dashboard_count = DB::table('t_products')
						                ->select(DB::raw('count(t_products.id) as products,sum(t_products.count_play) as played'))
						                ->get();
			$player_count = DB::table('users')
						                ->select(DB::raw('COUNT(users.id) as player'))
						                ->WHERE('users.role',2)
						                ->get();
			$action = Products::orderBy('created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Action')
										->get();
			$arcade = Products::orderBy('created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Arcade')
										->get();

			$adventure = Products::orderBy('created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Adventure')
										->get();
			$casino = Products::orderBy('created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Casual')
										->get();
			$puzzle = Products::orderBy('created_at','DESC')
										->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
										->WHERE('t_products.category','Puzzle')
										->get();
			$sports = Products::orderBy('created_at','DESC')
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
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(3);
			$top_products = DB::table('t_products')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						                ->orderBy('t_products.count_play','DESC')
						                ->paginate(10);
												
			return view('admin.home-admin', compact('master_datas','arcade','dashboard_count','player_count','action','adventure','casino','puzzle','sports'));	
			}
		}
		else{
			$master_datas = DB::table('t_products')
						                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
						                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate'))
						                ->get();
			return view('user.home-user', compact('master_datas'));
		}
	}
	
	
	public function adddataproduct(Request $request)
		        {
		$this->validate($request, [
									'name'=> 'required|max:50|unique:t_products',
									'category'=> 'required',
									'desc'=> 'required',
									'coint'=> 'required',
									'url'=> 'required',
				                    'img' => 'required|mimes:jpeg,bmp,jpg,png|max:2000|dimensions:width=512,height=512',
				                    'banner' => 'required|mimes:jpeg,bmp,png,jpg,pngmax:2000|dimensions:min_width=1024,min_height=270'
				                ]);
		
		$max = DB::table('t_products')        
				            ->where('id', DB::raw("(select max(`id`) from t_products)"))
				            ->get();
		foreach($max as $row){
			$max = $row->id+1;
		}
		$imageName = 'product_icon'.-$max. 
				                $request->file('img')->getClientOriginalName();
		$path = base_path() . '/public/img_product/';
		$request->file('img')->move($path , $imageName);

		$imagebannerName = 'product_icon'.-$max. 
				                $request->file('banner')->getClientOriginalName();
		$path = base_path() . '/public/img_product/';
		$request->file('banner')->move($path , $imagebannerName);

		$masterdata = new MasterData;

		$masterdata->img = '/img_product/'.$imageName;
		$masterdata->banner = '/img_product/'.$imagebannerName;
		$masterdata->name = Input::get('name');
		$masterdata->coint = Input::get('coint');
		$masterdata->url = Input::get('url');
		$masterdata->desc = Input::get('desc');
		$masterdata->category = Input::get('category');
		$masterdata->save();
		
		return $this->index()->withMessage('Product saved!');
	}

	public function updatedataproduct(Request $request)
	{
		$this->validate($request, [
								'name'=> 'required|max:50',
								'category'=> 'required',
								'desc'=> 'required',
								'coint'=> 'required',
								'url'=> 'required',
								'img' => 'mimes:jpeg,bmp,jpg,png|max:2000|dimensions:width=512,height=512',
								'banner' => 'mimes:jpeg,bmp,png,jpg,pngmax:2000|dimensions:min_width=1024,min_height=270'
							]);

		$max = DB::table('t_products')        
						->where('id', DB::raw("(select max(`id`) from t_products)"))
						->get();
		
		foreach($max as $row){
			$max = $row->id+1;
		}
		
		$id = Input::get('id');		
		$masterdata = MasterData::findOrFail($id);
		
		if($request->file('img')){
			$imageName = 'product_icon'.-$max. 
								$request->file('img')->getClientOriginalName();
			$path = base_path() . '/public/img_product/';
			$request->file('img')->move($path , $imageName);
			$masterdata->img = '/img_product/'.$imageName;			
		}
		if($request->file('banner')){
			$imagebannerName = 'product_icon'.-$max. 
								$request->file('banner')->getClientOriginalName();
			$path = base_path() . '/public/img_product/';
			$request->file('banner')->move($path , $imagebannerName);
			$masterdata->banner = '/img_product/'.$imagebannerName;			
		}

		$masterdata->name = Input::get('name');
		$masterdata->coint = Input::get('coint');
		$masterdata->url = Input::get('url');
		$masterdata->desc = Input::get('desc');
		$masterdata->category = Input::get('category');
		$masterdata->save();

		return $this->index()->withMessage('Product updated!');
		}

	public function addreviewproduct(Request $request)
		        {
		
		$id=Input::get('id_product');
				$master_datas = DB::table('t_products')
				                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
				                ->join('t_rate', 't_rate.id_product', '=', 't_products.id','left outer')
				                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate, t_rate.user_name,t_rate.rate,t_rate.comment,t_rate.created_at'))
				                ->where('t_products.id',$id)
				                ->get();
		$slider = DB::table('t_products')
						        ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						        ->orderBy('t_products.count_play','DESC')
						        ->paginate(3);
		$top_products = DB::table('t_products')
						        ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
						        ->orderBy('t_products.count_play','DESC')
						        ->paginate(10);

		$rate = new Rate;
		$rate->id_product = Input::get('id_product');
		$rate->id_user = Input::get('id_user');
		$rate->rate = Input::get('rate');
		$rate->user_name = Input::get('user_name');
		$rate->email = Input::get('email');
		$rate->comment = Input::get('comment');
		$rate->save();
		
		return redirect()->action(
			'PublicController@play', ['id' => $id]
		);
	}
		
	
	public function addproductadventure()
		    {
				
		$user = Auth::user();
		return view('admin.addproductadventure');
	}
	
	public function addproductaction()
		    {
		$user = Auth::user();
		return view('admin.addproductaction');
	}
	public function userprofile()
	{
		$user = Auth::user();
		$slider = DB::table('t_products')
				->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.coint,t_products.category,t_products.img,t_products.img_slider'))
				->orderBy('t_products.count_play','DESC')
				->paginate(3);

		$top_products = DB::table('t_play_products')
				->join('users', 'users.id', '=', 't_play_products.idplayer','left')						
				->select(DB::raw('users.id,users.name, users.img as img, count(score) as score'))
				->groupby('users.id')
				->orderby('score','desc')
				->paginate(5);

		return view('public.profile',compact('user','top_products'));
	}
	public function editprofile()
	{
		$user = Auth::user();

		return view('public.editprofile',compact('user'));
	}
	public function updateprofile(Request $request)
	{		
		$this->validate($request, [
				'name' => 'required',
				'sex' => 'required',
				'birthdate' => 'date|required',
				'password' => 'required|min:6|confirmed',
				'img' => 'mimes:jpeg,bmp,jpg,png||max:5000}'
		]);

		$user = Auth::user();
		$user->name = $request->input("name");
		$user->sex = $request->input("sex");
		$user->birthdate = $request->input("birthdate");
		$user->password = bcrypt($request->input("password"));
		
		if ($request->hasFile('img')) {
			$imageTempName = $request->file('img')->getPathname();
			$imageName =$request->file('img')->getClientOriginalName();
			$path = base_path() . '/public/upload/images/';
			$request->file('img')->move($path , $imageName);
			$user->img = '/upload/images/'.$imageName;
		}
		
		$user->save();
		
		return redirect()->action(
			'HomeController@userprofile'
		);
	}
	


	public function addproductpuzzle()
		    {
		$user = Auth::user();
		return view('admin.addproductpuzzle');
	}
	
	public function addproductcasion()
		    {
		$user = Auth::user();
		return view('admin.addproductcasion');
	}
	
	public function addproductsports()
		    {
		$user = Auth::user();
		return view('admin.addproductsports');
	}
	
	public function addproduct()
		    {
		$user = Auth::user();
		return view('admin.addproduct');
	}
	
	public function login()
		    {
		return view('login');
	}
	
	public function detail($id)
		    {
		$master_datas = DB::table('t_products')
				                ->join('t_products_rate', 't_products_rate.id_product', '=', 't_products.id','left outer')
				                ->join('t_rate', 't_rate.id_product', '=', 't_products.id','left outer')
				                ->select(DB::raw('t_products.id,t_products.name,t_products.desc,t_products.category,t_products.img,t_products_rate.avg_rate,t_products_rate.user_rate, t_rate.user_name,t_rate.rate,t_rate.comment,t_rate.created_at'))
				                ->where('t_products.id',$id)
				                ->get();
		return view('detail', compact('master_datas'));
	}
	
	public function editproduct($id) {
		
		$product = MasterData::findOrFail($id);

		return view('admin.editproduct',compact('product'));
	}
	
	public function deleteproduct($id) {
		
		$product = MasterData::findOrFail($id);
		$product->delete();		
		return $this->index()->withMessage('Product deleted!');
	}
		
	
}
