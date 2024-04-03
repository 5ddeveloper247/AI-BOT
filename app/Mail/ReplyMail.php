<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $attachments;
    public $subject;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param  string  $subject
     * @param  string  $message
     * @return void
     */
    public function __construct($subject, $message,$attachments)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->attachments = $attachments;

        // dd($subject, $message , $attachments);
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->view('emails.reply')
                    // ->text('emails.reply_plain')
                    ->with([
                        'replyMessage' => $this->subject,
                    ])
                    ->attach($this->attachments);
    }
}


