<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
class ShopcartController extends Controller
{
	//shopcart购物车页面展示
	public function index(){
		return view('/Home/shopcart');
	}

	//pay结算页面展示
	public function display(){
		return view('/Home/pay');
	}

	//success购物成功页面展示
	public function success(){
		return view('/Home/success');
	}

}