<?php

namespace Hangman\Http\Controllers;

class ApiController extends Controller
{
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

	public function __construct()
	{
	}

	public function index()
	{
		return view( 'home' );
	}

    public function create()
    {

    }
}
