<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use Laracasts\TestDummy\Factory as TestDummy;

/**
 * Class UsersTableSeeder
 *
 * A class used to seed the Users database table.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'user_name'=>env('ADMIN_USERNAME'),
                'first_name' =>env('ADMIN_FIRSTNAME'),
                'last_name' =>env('ADMIN_LASTNAME'),
                'email'=>env('ADMIN_EMAIL'),
                'password'=>Hash::make(env('ADMIN_PASSWORD')),
                'is_admin' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
