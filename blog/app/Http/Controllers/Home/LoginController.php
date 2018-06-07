<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	//login登录页面展示
	public function index(){
		return view('/Home/login');
	}

	
}