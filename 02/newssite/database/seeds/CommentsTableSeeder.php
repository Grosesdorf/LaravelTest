<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        Comment::create(
                	['text'   	=> 'Very cool comment 01',
                     'id_user'   	=>  10,
                     'id_news'  =>  1]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 02',
                     'id_user'   	=>  11,
                     'id_news'  =>  1]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 03',
                     'id_user'   	=>  10,
                     'id_news'  =>  1]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 04',
                     'id_user'   	=>  11,
                     'id_news'  =>  1]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 05',
                     'id_user'   	=>  12,
                     'id_news'  =>  1]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 06',
                     'id_user'   	=>  12,
                     'id_news'  =>  2]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 07',
                     'id_user'   	=>  10,
                     'id_news'  =>  2]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 08',
                     'id_user'   	=>  12,
                     'id_news'  =>  4]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 09',
                     'id_user'   	=>  11,
                     'id_news'  =>  5]
                    );
        Comment::create(
                	['text'   	=> 'Very cool comment 10',
                     'id_user'   	=>  10,
                     'id_news'  =>  5]
                    );

    }
}
