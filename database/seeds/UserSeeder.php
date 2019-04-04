
<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        \App\User::create(array(
            'email'    => 'b.grant@xtra.co.nz',
            'name' => 'Barbara',
            'password' => bcrypt('bookings'),
        ));
    }

}