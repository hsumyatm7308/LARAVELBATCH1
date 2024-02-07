<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LeaveNotify extends Notification
{
    use Queueable;

    public $tbid;
    public $title;
    public $studentid;

    /**
     * Create a new notification instance.
     */
    public function __construct($id, $title, $studentid)
    {
        $this->tbid = $id;
        $this->title = $title;
        $this->studentid = $studentid;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'id' => $this->tbid,
            'title' => $this->title,
            'studentid' => $this->studentid
        ];
    }
}


// php artisan notifications:table 
// php artisan migrate 
// php artisan make:notification LeaveNotify 