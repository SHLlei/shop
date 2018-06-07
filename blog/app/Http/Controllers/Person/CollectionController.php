<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
	//地址管理页面展示
	public function collection(){
		return view ('/Person/collection');
	}

}