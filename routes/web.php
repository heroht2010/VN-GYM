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


Route::get('trangchu','home_contronller@trangchu')->name('trangchu');

Route::get('thucphambosung','home_contronller@product');

Route::get('login',function(){
	return view('GYMHTML.GYM-login');
})->name('dangnhap');

Route::get('register',function(){
   return view('GYMHTML.register');
})->name('dangki');
Route::post('xuli_login','home_contronller@login')->name('xuli');
Route::get('detail_product/{id}','home_contronller@viewdetail')->name('chitietpro');
Route::post('insertcm','home_contronller@insert_cm')->name('insertcm');
Route::post('delete_giohang','home_contronller@delete_cart')->name('deletecart');
Route::post('insertrespond','home_contronller@insertrespond')->name('insertresponse');
Route::group(['prefix' => 'admin','middleware'=>'middleadmin'], function () {

Route::post('insert_account','home_contronller@insertaccount')->name('adduser');

Route::get('dangxuat','home_contronller@dangxuat')->name('dangxuat');

Route::get('giohang','home_contronller@giohang')->name('giohang');

Route::post('insert_giohang','home_contronller@insert_cart')->name('insertcart');

Route::get('listcomment','home_contronller@list_commentadmin')->name('listcomment');

Route::get('muahang','home_contronller@xulibuy')->name('muahang');

Route::post('bonuspro','home_contronller@bonus_code')->name('bonus');

Route::post('insertdh','home_contronller@insert_dh')->name('donhang');

Route::get('payment','home_contronller@viewpayment')->name('payment');

Route::get('huydon','home_contronller@huydh')->name('huydon');

Route::get('admin', function () {
    return view('GYMHTML.GYM-admin');
})->name('admin');

Route::get('listproductadmin','home_contronller@viewadmin_listproduct')->name('list-productadmin');

Route::get('view_insertproduct','home_contronller@viewinsert_productadmin')->name('viewinsertproduct');

Route::post('insertproduct','home_contronller@insert_productadmin')->name('insertproduct');


Route::get('editproduct','home_contronller@edit_product')->name('editproduct');
Route::post('updatepro','home_contronller@update_product')->name('updateproduct');

Route::get('search','home_contronller@searchbar')->name('search');

Route::get('deleteproduct','home_contronller@delete_product')->name('deleteproduct');

Route::get('listptadmin','home_contronller@listpt')->name('listpt');

Route::get('editpt','home_contronller@edit_ptadmin')->name('editpt');

Route::post('updatept','home_contronller@update_pt')->name('updatept');

Route::get('deletept','home_contronller@delete_pt')->name('deletept');

Route::get('view_insertpt',function(){
    return view('GYMHTML.insert-ptadmin');
})->name('viewinsertpt');

Route::post('insertpt','home_contronller@insert_ptadmin')->name('insertpt');

Route::get('listpay','home_contronller@listpay')->name('listpay');

Route::get('editpay','home_contronller@edit_payadmin')->name('editpay');

Route::post('updatepay','home_contronller@update_pay')->name('updatepay');

Route::get('ngay','home_contronller@tk_day')->name('theongay');
Route::post('thongke','home_contronller@tkpay')->name('tkpay');

Route::get('doanhthu','home_contronller@doanhthu')->name('doanhthu');
Route::post('thongkedoanhthu','home_contronller@tkdoanhthu')->name('tkdoanhthu');
});

Route::get('thietbigym','home_contronller@view_ACCE')->name('thietbigym');

Route::get('detailacce','home_contronller@view_detailacce')->name('detailacce');

//---------------------------------------------------------------------------------
//App Android
Route::get('getproductsale','home_contronller@get_productsale')->name('getproductsale');

Route::get('getproduct','home_contronller@get_product')->name('getproduct');

Route::get('getpt','home_contronller@get_pt')->name('getpt');

Route::get('getproducttype','home_contronller@get_producttype')->name('getproducttype');

Route::get('getallproduct','home_contronller@get_allproduct')->name('getallproduct');

Route::post('getcomment','home_contronller@get_comment')->name('getcomment');

Route::post('checklogin','home_contronller@check_login')->name('checklogin');

Route::post('searchproduct','home_contronller@search_Product')->name('searchproduct');
