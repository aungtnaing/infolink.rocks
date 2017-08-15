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
		Seo::set('global-title', 'Info-link IT Solution');
    Seo::set('global-description', 'Infolink it solution is a full serviced eCommerce Web App, Company Profiles, Android App, Business-Tire App, Desktop App and Consultant, data collection assessment firm based in Myanmar. The company was established in 2011 by Mr. Aung Thein Naing.<br> He is an experienced IT fields and worked in Myanmar for the past ten years. He has over 15 years experience in programming and consultant. Mr. Aung Thein Naing is also currently the Managing Director and Senior Programmer for Infolink IT Solution and Consulting for Myanmar World Distributation Limited in Myanmar.');

    Seo::set('logo-url', '\images\logo_black.png');
    Seo::set('search-url', 'infolink.rocks');
    Seo::set('latitude', 48.8256);
    Seo::set('longitude', 2.3258);

    Seo::set('email', 'aungtnaing82@gmail.com');
    Seo::set('phone', '95 9 256268077');
    Seo::set('opening-hours', 'Mo,Tu,We,Th,Fr 09:00-20:00');
    Seo::set('street-address', '2 A 312, PhanChatSetYone Street');
    Seo::set('address-locality', 'Yangon');
    Seo::set('address-region', 'Myanmar');
    Seo::set('address-country', 'mn');
    Seo::set('postal-code', '095');
    Seo::set('area-served', 'mn');

    Seo::setSimilarTo('https://www.facebook.com/my-facebook-page');
    Seo::setSimilarTo('https://twitter.com/my-twitter-page');

    Seo::setContactPoint([
        'type' => 'customer-service',
        'phone' => 'phone number',
        'area-served' => 'FR',
        'opening-hours' => 'Mo,Tu,We,Th,Fr 09:00-20:00',
        'available-languages' => ['French']
    ]);

    Seo::set('og-locale', 'fr_FR');
    Seo::set('og-image-url', 'facebook_image_url');
    Seo::set('og-image-type', 'image/jpeg');
    Seo::set('og-image-width', 1200);
    Seo::set('og-image-height', 630);

    Seo::set('fb-app-id', 'My facebook app ID');
    Seo::set('twitter-sign', '@My_Twitter_Account');

		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		Seo::set('title', 'Info-link IT Solution');
	Seo::set('description', "Infolink it solution is a full serviced eCommerce Web App, Company Profiles, Android App, Business-Tire App, Desktop App and Consultant, data collection assessment firm based in Myanmar. The company was established in 2011 by Mr. Aung Thein Naing.<br> He is an experienced IT fields and worked in Myanmar for the past ten years. He has over 15 years experience in programming and consultant. Mr. Aung Thein Naing is also currently the Managing Director and Senior Programmer for Infolink IT Solution and Consulting for Myanmar World Distributation Limited in Myanmar.");
	Seo::set('keywords', "infolink,infolink it solution,inof-link,Infolink it");
	Seo::set('breadcrumblist', [
	    ['title' => 'infolink', 'url' => 'infolink.rocks'],
	    ['title' => 'infolink', 'url' => 'infolink.rocks'],
	]);	
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
