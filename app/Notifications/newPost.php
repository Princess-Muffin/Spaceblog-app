<?php

namespace App\Notifications;

use App\Models\post;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Str;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newPost extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public post $post)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject("There is a New post in space from {$this->post->user->name}")
                    ->greeting("New post from fellow your S P A C E  M A T E {$this->post->user->name}")
                    ->line(Str::limit(strip_tags($this->post->message), 50))
                    ->action('Go to space and check it out', url('http://localhost:8000/posts'))

                    ->line('Thank you for being part of our space blogging platform! ')
                    ->line(' Good to have you with us');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
