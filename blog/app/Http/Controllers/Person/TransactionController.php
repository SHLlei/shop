<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
	//退换货页面展示
	public function returns(){
		return view ('/Person/returns');
	}
}