<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->command->info('Таблица пользователей заполнена данными!');
        $this->call(NewsTableSeeder::class);
        $this->command->info('Таблица новостей заполнена данными!');
        $this->call(CommentsTableSeeder::class);
        $this->command->info('Таблица комментариев заполнена данными!');
    }
}
