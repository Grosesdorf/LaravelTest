<?php

namespace App\Console\Commands;

use App\Models\Comment;
use Illuminate\Console\Command;

class NewsCommentRemove extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news-comm:remove {idComm}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove comment by ID';

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
        $idComm = $this->argument('idComm');
        Comment::destroy($idComm);
                
        $this->info('Remove a one comment...');
    }
}
