<?php namespace App\Http\Controllers;

class AboutController extends Controller {

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
	public function about()
	{
		$title="About page";
		$body="um trynna help maself doin sth v g and um proud of trying
		welcome to the content of about page";
		$mesho="<h1>5af mene ya basha ana bal3ab taekwondo hehehehehehhehehe :D</h1>";
		// return view('about');
//		return "Hello Mesho in about page! ";
		return view('about', compact('title', 'body', 'mesho'));
		
		//Instead of that i can use "compact method"by saying

		// return view('about', ["title"=>$title, "body"=>$body]);
	}

}
