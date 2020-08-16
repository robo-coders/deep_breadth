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
    return view('auth.login');
});

Auth::routes();
Route::middleware(['auth'])->group(function(){
Route::get('/user/redirect', 'adminController@redirect_user')->name('redirect_user');
Route::post('/change/password','adminController@changePassword')->name('change_password');

//Admin
route::get('/admin/dashboard','HomeController@admin')->name('admin_dashboard');
route::get('/admin/analytic/dashboard','HomeController@admin_analytic_dashboard')->name('admin_analytic_dashboard');
route::get('/admin/create/user','HomeController@admin_index_by_admin')->name('admin_index_by_admin');
route::post('/admin/create/user','adminController@create_admin')->name('admin_created_by_admin');
route::get('/edit/admin/{id}','HomeController@edit_admin')->name('edit_admin_profile');
route::post('/update/admin/{id}','adminController@update_admin_profile')->name('update_admin_profile');
route::get('/admin/create/company','HomeController@company_index_by_admin')->name('company_index_by_admin');
route::post('/admin/create/company','adminController@create_company_by_admin')->name('company_created_by_admin');
route::get('/admin/edit/user/{id}','HomeController@admin_edit_by_admin')->name('admin_edit_by_admin');
route::get('/admin/edit/company/{id}','HomeController@company_edit_by_admin')->name('company_edit_by_admin');
route::post('/admin/update/admin/{id}','adminController@update_admin_by_admin')->name('update_admin_by_admin');
route::post('/update/company/{id}','adminController@update_compnay_by_admin')->name('update_company_by_admin');
route::post('/delete/admin/{id}','adminController@delete_admin_by_admin')->name('delete_admin_by_admin');


//Company
route::get('/company/dashboard','HomeController@company')->name('company_dashboard');
route::post('/survey/form','HomeController@survey_form')->name('survey_form_index');
route::get('/edit/profile/{id}','HomeController@edit_company_profile')->name('edit_company_profile');
route::post('/update/profile/{id}','adminController@update_company_profile')->name('update_company_profile');
route::post('/delete/company/{id}','adminController@delete_company_by_admin')->name('delete_company_by_admin');
route::get('/review/save','adminController@saveReview')->name('saveReview');
//Graphs
route::get('/pain/stress/level/before','companyGraphController@pain_stress_level_before')->name('pain_stress_level_before');
route::get('/pain/stress/level/after','companyGraphController@pain_stress_level_after')->name('pain_stress_level_after');
route::get('/mood/morale/','companyGraphController@mood_morale')->name('mood_morale');







Route::get('/home', 'adminController@redirect_user')->name('home');
});
	