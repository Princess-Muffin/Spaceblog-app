<?php

namespace App\Listeners;

use App\Events\postCreated;
use App\Models\User;
use App\Notifications\newPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendPostCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(postCreated $event): void
    {
        foreach (User::whereNot('id', $event->post->user_id)->cursor() as $user) {
            $user->notify(new newPost($event->post));
        }
    }
}
