<?php

namespace App\Console\Commands;

use App\Models\Comment;
use Illuminate\Console\Command;

class NewsCommentCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news-comm:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new comment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $idUser = $this->ask('Which is your ID');
        $idNews = $this->ask('Which is an ID news?');
        $comment = $this->ask('Enter here your comment...');

        $newComment = new Comment();
        $newComment->createComment($idUser, $idNews, $comment);
        $newComment->save();
        
        $this->info('Created a one comment...');
        
        // dd($idUser, $idNews, $comment);
    }
}
