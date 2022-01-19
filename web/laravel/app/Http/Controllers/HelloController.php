<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	public function index()
	{
		$date = ['msg' => 'this is sample message.',];
		return view('hello.index', $date);
	}
}
