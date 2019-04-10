
<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        \App\User::create(array(
            'email'    => env('ADMIN_USERNAME', 'redvaleridge@gmail.com'),
            'name' => 'Barbara',
            'password' => bcrypt(env('ADMIN_PASSWORD', 'bookings')),
        ));
    }

}