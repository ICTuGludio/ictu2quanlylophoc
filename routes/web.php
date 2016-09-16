<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'LopHocController@index');
Route::get('/lop','LopHocController@index');
Route::get('/lop/{lopid}/','LopHocController@dssvTrongLop');
Route::get('/lop/{lopid}/{hpbd}/','LopHocController@dssvHBBD');
Route::post('/lop/timsvTrongLop/','LopHocController@timsvTrongLop');


Route::get('/phanlop', 'LopHocController@formphanlop');
Route::post('/phanlop/timsvmoi','LopHocController@timsvMoi');
Route::post('/phanlop','LopHocController@phanlop');

//View share dùng cho tất cả view
View::Share('title','Tiêu đề');

//View::Composer dùng cho 1 số view chỉ định

Route::get('/lopDemo',function(){
    //return 'Đây là lớp '.$lop;
	return view('danhsachlop');
});
Route::get('/lopDemo/{tenlop}/',function($lop){
    //return 'Đây là lớp '.$lop;
	$khoa = 'cntt';
	return view('sinhvientronglop',compact('lop','khoa'));
});
Route::get('/lopDemo/{tenlop}/{hpbd}/',function($lop,$hbbd){
    return 'Đây là lớp '.$lop." sinh nhat sap toi ".$hbbd;
});
Route::get('/diem/{masv}/',function($masv){
    return 'Đây là điểm  sinh viên';
});



Route::get('/demo',function(){
    return 'Đây là demo đầu tiên';
});

Route::get('/demo/{sports}',function($sp){
    return 'Đây là demo đầu tiên '.$sp;
});
Route::get('/demo/{hoten}/{sodienthoai}/',function($ht,$sp){
    return 'Đây là demo đầu tiên '.$ht." ".$sp;
})->where(['hoten'=>'[ a-zA-Z]+','sodienthoai'=>'[0-9]{5,10}']);


Route::get('/demon2', function(){
        if (Auth::check())
        {
            Route::get('/', 'PagesController@logged_in_index');
        } else {
            Route::get('/', 'PagesController@guest_index');
        }
    });
	
