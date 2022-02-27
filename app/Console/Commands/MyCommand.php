<?php

namespace App\Console\Commands;

use App\Models\Comment;
use Illuminate\Console\Command;

class MyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:cmd {comment?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is my first command!';

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
     * @return int
     */
    public function handle()
    {
        // return 0;

        $comment_id = $this->argument('comment');
        if ($comment_id != null) {
            $comment_data = Comment::find($comment_id);
            if ($comment_data != null) {
                echo "\nComment id = " . $comment_id . ":\n";
                echo $comment_data->the_comment . "\n";
                return 0;
            }
        }

        echo "\nテストコマンド";
        echo "\n改行もできるよ(=ﾟωﾟ)ﾉ";
        echo "\n\n";
    }
}
