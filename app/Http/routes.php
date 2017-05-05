	<?php

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

		use App\User;
		use App\Category;
		use App\Posts;
		use App\Books;
		use App\Orderstemp;
		

		Route::get('/', 'WelcomeController@index');
		Route::get('home', 'HomeController@index');
		
		Route::get('mn', 'LanguageController@changemn');
		Route::get('en', 'LanguageController@changeen');

			Route::resource('contactus','ContactusController');


		Route::get('homemyanmar', 'LanguageController@homemyanmar');



		Route::get('aboutus', function() {

			$categorys = Category::All();
			$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
			return view('pages.about')
			->with('categorys', $categorys)
			->with('ourhistorys', $ourhistorys);
			
			
		});

		Route::get('aboutusmyanmar', function() {

			$categorys = Category::All();
			$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
			return view('pages.aboutmyanmar')
			->with('categorys', $categorys)
			->with('ourhistorys', $ourhistorys);
			
		});



		 Route::get('services', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
				return view('pages.services')
					->with('categorys', $categorys)
				->with('ourhistorys', $ourhistorys);
				 	
				});


		 Route::get('servicesmyanmar', function() {

				$categorys = Category::orderBy('id', 'desc')->get();
				$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
				return view('pages.servicesmyanmar')
					->with('categorys', $categorys)
					->with('ourhistorys', $ourhistorys);
				 	
				});


		Route::get('privacypolicy', function() {

			$categorys = Category::All();
			
			return view('pages.privacypolicy')
			->with('categorys', $categorys);
			
			
		});

		Route::get('privacypolicymyanmar', function() {
			$categorys = Category::All();
			
			return view('pages.privacypolicymyanmar')
			->with('categorys', $categorys);
			
			
		});

		Route::get('termscondation', function() {

			$categorys = Category::All();
			
			return view('pages.termscondation')
			->with('categorys', $categorys);
			
			
		});

		Route::get('termscondationmyanmar', function() {

			$categorys = Category::All();
			
			return view('pages.termscondationmyanmar')
			->with('categorys', $categorys);
			
			
		});

		

		Route::get('contactus', function() {

			$categorys = Category::All();

				$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
			
			return view('pages.contactus')
			->with('categorys', $categorys)
			->with('ourhistorys', $ourhistorys);
			
		});

		Route::get('contactusmyanmar', function() {

			$categorys = Category::All();
				$ourhistorys = Posts::where('active',1)
		->where('mainslide', 1)
		->where('name','!=','')
		->orderBy('id','DESC')
		->take(3)
		->get();
			return view('pages.contactusmyanmar')
			->with('categorys', $categorys)
			->with('ourhistorys', $ourhistorys);
			
		});

		Route::get('authorprofile/{userid}', function($userid) {

			$categorys = Category::All();

			$user = User::find($userid);
			
			return view('pages.authorprofile')
			->with('user', $user)
			->with('categorys', $categorys);
			
			
		});

		Route::get('postlists/{categoryid}', ['as' => 'postlists', function ($categoryid) {
			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', $categoryid)
			->where('name','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('name','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlists')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
			
		}]);

		
		
		Route::get('postlistsmyanmar/{categoryid}', ['as' => 'postlistsmyanmar', function ($categoryid) {
			$categorys = Category::All();

			$postlists = Posts::where('active',1)
			->where('categoryid', $categoryid)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->paginate(4);

			$recentposts = Posts::where('active',1)
			->where('categoryid','!=', 2)
			->where('mname','!=','')
			->orderBy('id','DESC')
			->take(4)
			->get();
			
			return view('pages.postlistsmyanmar')
			->with('postlists', $postlists)
			->with('categorys', $categorys)
			->with('latestposts', $recentposts);
			
		}]);

		

		



	Route::get('postdetails/{postid}', [
		'uses' => 'PostsController@postdetails'
		]);

	Route::get('postdetailsmyanmar/{postid}', [
		'uses' => 'PostsController@postdetailsmyanmar'
		]);

	
	
	Route::resource('profiles','ProfilesController');

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
		]);

	

	
	Route::group(['middleware' => 'auth'],function()
	{
		
	

		Route::post('makeorder', [
			'uses' => 'CheckoutController@makeorder'
			]);

		Route::resource('checkouts','CheckoutController');
		Route::resource('checkoutsmyanmar','CheckoutmyanmarController');
		
	


		Route::resource('comments','CommentsController');
		Route::resource('replycomments','ReplycommentsController');
		
		Route::group(['middleware' => 'rolewaredashboard'],function()
		{
			Route::resource('dashboard','DashboardController');

		});	
		Route::group(['middleware' => 'roleware6'],function()
		{
			// Route::resource('adlists','AdlistsController');
		});		

		Route::group(['middleware' => 'roleware5'],function()
		{
			Route::resource('orderlists','OrderlistsController');
		});		

		Route::group(['middleware' => 'roleware3_4'],function()
		{
			
			
			Route::resource('posts','PostsController');
			Route::resource('postsmyanmar','PostsmyanmarController');

			Route::group(['middleware' => 'roleware2'],function()
			{
				


				Route::get('dashboarduserprofile', [
					'uses' => 'ProfilesController@dashboarduserindex'
					]);

				

				Route::group(['middleware' => 'roleware'],function()
				{
					
					Route::resource('categorys','CategoryController');
					Route::resource('userspannel','UserspannelController');
					
				});

			});
			
		});



		
	});

	