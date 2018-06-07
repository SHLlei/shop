<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;

class AssetsController extends Controller
{
	//个人账单页面展示
	public function bill(){
		return view ('/Person/bill');
	}

	//账单明细展示
	public function billlist(){
		return view ('/Person/billlist');
	}

	//红包展示
	public function bonus(){
		return view ('/Person/bonus');
	}
}