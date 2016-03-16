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
        User::create(
                	['f_name'      => 'This',
                     'l_name'     =>  'gmail.com',
                     'email'  =>  'qw3@qw.com']
                    );
        User::create(
                	['f_name'      => 'This',
                     'l_name'     =>  'gmail.com',
                     'email'  =>  'qw4@qw.com']
                    );
        User::create(
                	['f_name'      => 'This',
                     'l_name'     =>  'gmail.com',
                     'email'  =>  'qw5@qw.com']
                    );
    }
}
