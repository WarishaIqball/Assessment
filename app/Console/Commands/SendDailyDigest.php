<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\DailyDigestMail;
use App\Models\Post;
use App\Models\User;

class SendDailyDigest extends Command
{
    protected $signature = 'send:daily-digest';
    protected $description = 'Send a daily email digest of the top posts to all users';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get the top posts (e.g., top 5 posts created in the last 24 hours)
        $posts = Post::where('created_at', '>=', now()->subDay())->orderBy('created_at', 'desc')->take(5)->get();

        if ($posts->isEmpty()) {
            $this->info('No posts found for the daily digest.');
            return;
        }

        // Get all users
        $users = User::all();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new DailyDigestMail($posts)); // Pass $posts variable to DailyDigestMail constructor
        }

        $this->info('Daily digest email sent to all users.');
    }
}
