<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Inquiry;
use Illuminate\Http\Request;


class HomeController extends Controller {


    public function show()
    {

        $getFiles = function($path) {
            $it = new \DirectoryIterator(public_path() .$path);
            $results = [];
            foreach($it as $file) {
                if($file->isFile()) {
                    $results[] = str_replace(public_path(), '', $file->getPathname());
                }
            }
            return $results;
        };

        $banner = $getFiles('/images/banner_opt');
        $rooms = $getFiles('/images/rooms_opt');
        $house = $getFiles('/images/house_opt');
        $thingstodo = $getFiles('/images/thingstodo_opt');
        $food = $getFiles('/images/food_opt');
        return \View::make('home', array('banner' => $banner, 'rooms' => $rooms, 'house' => $house, 'thingstodo' => $thingstodo, 'food' => $food));
    }


    public function inquiry(Request $request)
    {
        $params = $request->all();
        Mail::to([['email' => env('INQUIRY_ADDRESS')]])->send(new Inquiry($params));
        return response()->json(['status' => 'sent']);
    }
 


}
