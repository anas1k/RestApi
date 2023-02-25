<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;
use App\Models\User;
use App\Notifications\DailyArticleNotification;

class SendDailyArticlesEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:digest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily articles digest to all users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $articles = Article::whereBetween('published_at', [now()->subDay(), now()])->get();
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new DailyArticleNotification($articles));
        }
        // return Command::SUCCESS;
    }
}
