<?php

namespace App\Mail;

use App\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class entrySubmittedAdmin extends Mailable
{
    use Queueable, SerializesModels;
    public $submission;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Submission Received')->view('mails.adminMail');
    }
}
