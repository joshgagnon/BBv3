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

Route::get('/', 'HomeController@show');
Route::get('/manage', function(){
    return View::make('manage');
});

Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));


Route::get('dates', function()
{
    return Response::json(DB::table('bookings')->get());

});

Route::post('dates', function()
{
    $date = new \DateTime;
    if(Input::has('book')){
        $bookings = Input::get('book');

        DB::table('bookings')->whereIn('date_string', $bookings)->delete();
        $data = array();
        foreach($bookings as $b){
            array_push($data, array('date_string' => $b, 'created_at' => $date, 'updated_at' => $date));
        }
        DB::table('bookings')->insert($data);
        
    }
    if(Input::has('unbook')){
        DB::table('bookings')->whereIn('date_string', Input::get('unbook'))->delete();
    }
    DB::commit();
    return Response::json(array('success' => true));

});