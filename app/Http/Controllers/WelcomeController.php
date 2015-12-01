<?php namespace App\Http\Controllers;
Class WelcomeController extends Controller{

	public function _construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		//return 'hello world';
		
		return view('welcome');
	}

	public function contact()
	{
		//return 'Please contact me!';
		return view('pages.contact');
	}
}