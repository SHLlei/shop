<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//展示前台首页
Route::get('shop','Home\ShopController@index');

//展示搜索页面
Route::get('search','Home\ShopController@reveal');

//展示全部分类页面
Route::get('type','Home\ShopController@typeindex');

//展示详情页面
Route::get('introduction','Home\ShopController@display');



//展示购物车
Route::get('shopcart','Home\ShopcartController@index');

//展示结算页面
Route::get('pay','Home\ShopcartController@display');

//展示购物成功页面
Route::get('success','Home\ShopcartController@success');



//展示登录页面
Route::get('login','Home\LoginController@index');

//展示注册页面
Route::get('register','Home\RegisterController@index');


//个人中心

//个人资料
//展示地址管理页面
Route::get('address','Person\InformationController@address');
//展示我的银行卡页面
Route::get('cardlist','Person\InformationController@cardlist');
//展示绑定银行卡页面
Route::get('cardmethod','Person\InformationController@cardmethod');




//我的交易
//展示退换货页面
Route::get('returns','Person\TransactionController@returns');
//展示我的评论
Route::get('comment','Person\TransactionController@comment');
//展示评论列表
Route::get('commentlist','Person\TransactionController@commentlist');



//我的资产
//展示个人账单
Route::get('bill','Person\AssetsController@bill');
//展示账单明细
Route::get('billlist','Person\AssetsController@billlist');
//展示红包
Route::get('bonus','Person\AssetsController@bonus');


//我的收藏
//展示我的收藏
Route::get('collection','Person\CollectionController@collection');





//在线客服