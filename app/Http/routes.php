<?php

use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PublicController@index');
Route::get('/detail/{id?}', ['as'=>'detail.id','uses'=>'PublicController@detail']);
Route::get('/action', 'PublicController@action');
Route::get('/listproducts', 'PublicController@listproducts');

Route::get('/perikanan', 'PublicController@perikanan');
Route::get('/kesehatan', 'PublicController@kesehatan');
Route::get('/kecantikan', 'PublicController@kecantikan');
Route::get('/home', 'PublicController@index');
Route::get('/pertanian', 'PublicController@pertanian');
Route::get('/peternakan', 'PublicController@peternakan');
Route::get('/otomotif', 'PublicController@otomotif');
Route::get('/play/{id}', 'PublicController@play');
Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/getDataBarChart', 'PublicController@getDataBarChart');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/addproductaction', 'HomeController@addproductaction');
	Route::get('/addproductcasino', 'HomeController@addproductcasino');
	Route::get('/addproductkecantikan', 'HomeController@addproductkecantikan');
	Route::get('/addproductpertanian', 'HomeController@addproductpertanian');
	Route::get('/addproductotomotif', 'HomeController@addproductotomotif');
	Route::get('/addproduct', 'HomeController@addproduct');
	Route::get('/editproduct/{id}', 'HomeController@editproduct');
	Route::get('/userprofile', 'HomeController@userprofile');
	Route::get('/editprofile', 'HomeController@editprofile');
	Route::post('/updateprofile', 'HomeController@updateprofile');
	Route::post('/adddataproduct', 'HomeController@adddataproduct');
	Route::delete('/deleteproduct/{id}', 'HomeController@deleteproduct');
	Route::post('/updatedataproduct', 'HomeController@updatedataproduct');

	Route::post('/addreviewproduct', 'HomeController@addreviewproduct');

});

//activation
Route::get('/user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
Route::auth();

//jwt-auth
Route::group(['middleware' => ['bcors']], function () {
	
	Route::post('/signup', function(){
	
	$input = Input::only('email','birthdate','password','name','phone_number','sex','address');

		if (isset($input['email']) && isset($input['birthdate']) && isset($input['password']) && isset($input['sex']) &&
			isset($input['address']) && isset($input['phone_number']) && isset($input['name'])){
					$input['password'] = Hash::make($input['password']);
					$email = $input['phone_number'];		

					$user = User::where('phone_number',$email)->first();
					if($user){
						return Response::json(['status'=>false,'message'=>'user already exsist']);
					}else{
						try {
							$input['activated']=1;
							$input['role']=2;
							User::create($input);            
						} catch (Exception $e) {
							return Response::json(['status'=>false,'message'=>$e]);
						}
						return Response::json(['status'=>true,'message'=>"success created user"]);            
					}
					}else{
						return Response::json(['status'=>false,'message'=>'parameter input not complete!','data'=>$input]);
					}
		});
	
		Route::post('/signin', function(){

			$input = Input::only('phone_number','password');
			//$customClaims = ['name' => $user->nama, 'picture' => $user->file_foto];
			//if (!$token = JWTAuth::attempt($input, $customClaims)) {
			
			if (!$token = JWTAuth::attempt($input)) {
				return response()->json(['status'=>false,'message' => 'wrong email or password.']);
			}
			$user = User::Where('phone_number',$input['phone_number'])->first();
			return response()->json(['status'=>true,'user'=>$user,'token' => $token]);

		});

	 });
	
	
	Route::group(['middleware' => ['bcors','jwt.auth']], function () {
		Route::get('/getproducts/{take?}','PublicController@getproducts');
	});
	
