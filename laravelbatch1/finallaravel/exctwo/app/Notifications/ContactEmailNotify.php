<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactEmailNotify extends Notification
{
    use Queueable;

    private $data;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
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
            ->greeting("New contact created")
            ->line('Full Name : ' . $this->data['firstname'] . ' ' . $this->data['lastname']) // Corrected concatenation
            ->line('Birth Date : ' . $this->data['birthday'])
            ->line('Relative : ' . $this->data['relative'])
            ->action('Visit Site', $this->data['url']);
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    // public function toArray(object $notifiable): array
    // {
    //     return [
    //         //
    //     ];
    // }
}



// =>Gmail Integrate  (post forward / 2.app password)
// Gmail > Setting Icon > See all setting > Forward and POP/IMAP > IMAP On

// Gmail > Manage your Google Account > Security > 2 step Veryfication > Get start > App Password 
// => Data Land Student Management Project 


// t l g q b u v e u w b f r s x w   