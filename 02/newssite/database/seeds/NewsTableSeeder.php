<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->delete();

        News::create(
                	['title'   	=> 'News 01',
                     'text'   	=>  'Very important news 01',
                     'id_user'  =>  10]
                    );
        News::create(
                	['title'   	=> 'News 02',
                     'text'   	=>  'Very important news 02',
                     'id_user'  =>  10]
                    );
        News::create(
                	['title'   	=> 'News 03',
                     'text'   	=>  'Very important news 03',
                     'id_user'  =>  11]
                    );
        News::create(
                	['title'   	=> 'News 04',
                     'text'   	=>  'Very important news 04',
                     'id_user'  =>  11]
                    );
        News::create(
                	['title'   	=> 'News 05',
                     'text'   	=>  'Very important news 05',
                     'id_user'  =>  12]
                    );
        
    }
}
