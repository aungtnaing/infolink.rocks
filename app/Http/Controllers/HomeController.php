<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


use App\Category;
use App\Posts;


use View;
use Config;		


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
		
		$this->middleware('auth');
		// $this->middleware('guest');
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		$mainslides = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->get();


		$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
		
		$populars = Posts::where('active',1)
		->where('popular', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->get();

		
		$categorys = Category::All();

		return view('pages.home')
		->with('categorys', $categorys)
		->with('mainslides', $mainslides)	
		->with('ourhistorys', $ourhistorys)
		->with('populars', $populars);
		
		
	}
	
	
	
}
