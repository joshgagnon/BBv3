<?php
namespace App\Http\Controllers;
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

    public function doLogin()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:1' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = \Validator::make(\Input::all(), $rules);

        // if the validator fails, redirect back to the form
        dd($validator->fails());
        if ($validator->fails()) {
            return \Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(\Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email'     => \Input::get('email'),
                'password'  => \Input::get('password')
            );

            // attempt to do the login
            if (\Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return \Redirect::to('manage');

            } else {

                // validation not successful, send back to form
                return \Redirect::to('login');

            }

        }
    }


    public function showLogin()
    {
        // show the form
        return \View::make('login');
    }

    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the login screen
    }
}
