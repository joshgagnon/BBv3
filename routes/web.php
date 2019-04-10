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
use Illuminate\Http\Request;
use App\Booking;


Route::get('/', 'HomeController@show');
Route::post('inquiry', 'HomeController@inquiry');


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('availability', function()
{
    return Response::json(Booking::all());

});


Route::group(['middleware' => ['auth']], function() {
    Route::get('manage', function(){
        return View::make('manage');
    });
    Route::post('change-availability', function(Request $request)
    {
        $fields = $request->all();
        $booking = Booking::firstOrNew(['date_string' => $fields['date']]);
        if(!$booking->rooms_booked) {
            $booking->rooms_booked = [];
        }
        $rooms_booked = array_filter($booking->rooms_booked, function($v) use ($fields) { return $v != $fields['name'];});
        if(!$fields['available']) {
            $rooms_booked[] = $fields['name'];
        }
        $booking->rooms_booked = array_values($rooms_booked);
        if(count($booking->rooms_booked)) {
            $booking->save();
        }
        else{
            $booking->delete();
        }
        return Response::json(array('success' => true));
    });
    Route::get('inquiry-preview', function(Request $request) {
        return new App\Mail\Inquiry($request->all());
    });
});

