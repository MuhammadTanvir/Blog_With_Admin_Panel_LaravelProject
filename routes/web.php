<?php
// User Route

Route::group(['namespace'=>'User'],function(){

Route::get('/','HomeController@index');
Route::get('/post/{post}','PostController@post')->name('post');

Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
Route::get('post/category/{category}','HomeController@category')->name('category');

});


// Admin Route
Route::group(['namespace'=>'Admin'],function(){

Route::get('admin/home','HomeController@index')->name('admin.home');
// post Route
Route::resource('admin/post','PostController');

// Tag Route
Route::resource('admin/tag','TagController');
// Category Route
Route::resource('admin/category','CategoryController');	
// User Route
Route::resource('admin/user','UserController');	

// Role Route
Route::resource('admin/role','RoleController');

// Permission Route
Route::resource('admin/permission','PermissionController');

Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@login');

});






Auth::routes();

Route::get('/home', 'HomeController@index');
