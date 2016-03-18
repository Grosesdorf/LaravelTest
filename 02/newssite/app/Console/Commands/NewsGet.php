<?php

namespace App\Console\Commands;

use App\Models\News;
use Illuminate\Console\Command;

class NewsGet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:get {idNews=all}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return all news';

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
        $idNews = $this->argument('idNews');
        if($idNews == 'all'){
            $news = News::all();    
            foreach ($news as $item) {
            $table[] = [$item -> id, $item -> title, $item -> text];
            }
        }
        else{
            $news = News::find($idNews);
            $table[] = [$news -> id, $news -> title, $news -> text];    
        }
        
        $headers = ['ID', 'Title', 'Text news'];      
        $this->table($headers, $table);
        $this->info('Display all news...');
        
        // dd($idNews);
    }
}
