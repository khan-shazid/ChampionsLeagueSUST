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
//
// Route::get('/', function () {
//     return view('index');
// });

Route::get('return', function () {
    return view('return');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/',['as'=>'/','uses'=>'TeamController@showIndex']);
Route::get('index',['as'=>'index','uses'=>'TeamController@showIndex']);
// Route::get('index', function () {
//
//     return view('index');
// });
Route::get('about', function () {
    return view('about');
});
Route::get('news', function () {
    return view('news');
});
Route::get('news-single', function () {
    return view('news-single');
});
Route::get('schedule', function () {
    return view('schedule');
});
Route::get('team', function () {
    return view('team');
});
Route::get('team-single', function () {
    return view('team-single');
});

Route::get('reg', function () {
    return view('page_404');
});

Route::get('welcome_2', function () {
    return view('welcome_2');
});

Route::get('register', function () {
    return view('auth.register');
})->middleware('role:admin');

Route::get('upload', function() {
  return View::make('upload');
});
Route::post('apply/upload', 'ApplyController@upload');

Route::get('table_tt',['as'=>'table_tt','uses'=>'TeamController@showTableTeam']);

Route::get('table_pp',['as'=>'table_pp','uses'=>'TeamController@showTablePlayer']);

Route::get('table_ss',['as'=>'table_ss','uses'=>'TeamController@showTableSchedule']);

Route::get('table_t',['as'=>'table_t','uses'=>'AdminController@showTableTeam'])->middleware('role:admin');
Route::post('table_t',['as'=>'table_t_verify','uses'=>'RegistrationController@verifyTeam'])->middleware('role:admin');
Route::get('updateR/table_t',['as'=>'updateR/table_t','uses'=>'AdminController@showTableTeam'])->middleware('role:admin');


Route::get('table_p',['as'=>'table_p','uses'=>'AdminController@showTablePlayer'])->middleware('role:admin');
Route::get('updateR/table_p',['as'=>'updateR/table_p','uses'=>'AdminController@showTablePlayer'])->middleware('role:admin');

// Route::get('table_s',['as'=>'table_s','uses'=>'AdminController@showTableSchedule'])->middleware('role:admin');

Route::post('form',['as'=>'form','uses'=>'AdminController@makeForm'])->middleware('role:admin');
Route::get('form',['as'=>'form','uses'=>'AdminController@showForm'])->middleware('role:admin');
Route::get('updateR/form',['as'=>'updateR/form','uses'=>'AdminController@showForm'])->middleware('role:admin');

Route::post('league',['as'=>'league','uses'=>'AdminController@makeLeague'])->middleware('role:admin');
Route::get('league',['as'=>'league','uses'=>'AdminController@showLeague'])->middleware('role:admin');
Route::get('updateR/league',['as'=>'updateR/league','uses'=>'AdminController@showLeague'])->middleware('role:admin');

Route::post('reg_1',['as'=>'reg_1','uses'=>'RegistrationController@doReg_1']);
Route::get('reg_1',['as'=>'reg_1','uses'=>'RegistrationController@showReg_1Form']);

Route::post('reg_2',['as'=>'reg_2','uses'=>'RegistrationController@doReg_2']);
Route::get('reg_2',['as'=>'reg_2','uses'=>'RegistrationController@showReg_2Form']);

Route::get('verifyp/{id}',['as'=>'verifyp','uses'=>'RegistrationController@verifyPlayer'])->middleware('role:admin');
Route::get('notverifyp/{id}',['as'=>'notverifyp','uses'=>'RegistrationController@notVerifyPlayer'])->middleware('role:admin');

//Route::get('verifyt',['as'=>'verifyt','uses'=>'RegistrationController@verifyTeam']);
// Route::post('verifyt',['as'=>'verifyt','uses'=>'RegistrationController@verifyTeam']);
//Route::get('notverifyt/{id}',['as'=>'notverifyt','uses'=>'RegistrationController@notVerifyTeam']);

Route::get('grouping',['as'=>'grouping','uses'=>'AdminController@showGroup'])->middleware('role:admin');
Route::post('grouping',['as'=>'grouping','uses'=>'AdminController@makeGroup'])->middleware('role:admin');
Route::get('updateR/grouping',['as'=>'updateR/grouping','uses'=>'AdminController@showgroup'])->middleware('role:admin');

Route::get('grouping_show',['as'=>'grouping_show','uses'=>'AdminController@tableGroup']);
Route::get('updateR/grouping_show',['as'=>'updateR/grouping_show','uses'=>'AdminController@tableGroup']);

Route::post('updateR',['as'=>'updateR','uses'=>'AdminController@updateResult'])->middleware('role:admin');
Route::get('updateR/{id}',['as'=>'updateR','uses'=>'AdminController@updateResultForm'])->middleware('role:admin');
