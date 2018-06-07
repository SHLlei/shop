<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;

class InformationController extends Controller
{
	//地址管理页面展示
	public function address(){
		return view ('/Person/address');
	}

	//我的银行卡页面展示
	public function cardlist(){
		return view ('/Person/cardlist');
	}

	//绑定页面展示
	public function cardmethod(){
		return view ('/Person/cardmethod');
	}
}