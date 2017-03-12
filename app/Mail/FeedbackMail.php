<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;
    public $feedback;
    public $content;
    public $name;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($feedback,$name,$content,$email)
    {
        $this->feedback = $feedback;
        
        $this->name = $name;
        $this->content = $content;
        $this->email = $email;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from('noreply@ogxaffaire.com',trans('messages.ogxaffaireteam'))->subject(trans('messages.newfeedback'))->view('mail.feedback');
    }
}
