<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
class ShopController extends Controller
{
	//shop首页展示
	public function index(){
		return view('/Home/shop');
	}


	//search搜索页展示
	public function reveal(){
		return view('/Home/search');
	}


	//type分类页展示
	public function typeindex(){
		return view('/Home/type');
	}


	//introduction商品详情页展示
	public function display(){
		return view('/Home/introduction');
	}
}