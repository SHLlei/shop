<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
	//register展示注册页面
	public function index(){
		return view('/Home/register');
	}
	
}