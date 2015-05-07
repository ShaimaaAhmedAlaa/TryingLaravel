<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {

	//
	public function pages() {
		return "what a page :D this is pages here hahahahahaha";
	}

	public function contact() {
		// return view('contact');
		//		return "Hello Mesho in contact page! ";
		$title = "Contact page";
		$body  = "this is the body of contact page and actually I don't know what I should write :D ";
		return view('contact', compact('title', 'body'));

	}

}
