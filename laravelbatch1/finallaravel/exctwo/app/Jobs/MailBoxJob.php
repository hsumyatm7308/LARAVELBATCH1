<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


use App\Mail\Mailbox;
use Illuminate\Support\Facades\Mail;

class MailBoxJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $to;
    public $subject;
    public $content;
    /**
     * Create a new job instance.
     */
    public function __construct($to, $subject, $content)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->content = $content;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->to)->send(new Mailbox($this->subject, $this->content));

    }
}


// php artisan make:job MailBoxJob 