<?php namespace App\Http\Controllers;


use App\Category;
use App\Posts;

use View;
use Config;



class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	
$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
	$mainslides = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
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

	public function myanmarindex()
	{

	$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
	$mainslides = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->get();

		$populars = Posts::where('active',1)
		->where('popular', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->get();

		
		$categorys = Category::All();

		return view('pages.homemyanmar')
		->with('categorys', $categorys)
		->with('mainslides', $mainslides)	
		->with('ourhistorys', $ourhistorys)
		->with('populars', $populars);
	}

	

}


