<?php

use Illuminate\Database\Seeder;
use App\Models\User;	

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();

        User::create(
                	['f_name'   => 'User01',
                     'l_name'   =>  'Xy',
                     'email'  	=>  'user01gmail.com']
                    );
        User::create(
                	['f_name'   => 'User02',
                     'l_name'   =>  'Zs',
                     'email'  	=>  'user02gmail.com']
                    );
        User::create(
                	['f_name'   => 'User03',
                     'l_name'   =>  'Us',
                     'email'  	=>  'user03gmail.com']
                    );
    }
}
