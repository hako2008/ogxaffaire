<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $content;
    public $name;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$content,$email)
    {
                
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
        
        return $this->from('noreply@ogxaffaire.com',trans('messages.ogxaffaireteam'))->subject(trans('messages.newmessage'))->view('mail.message');
    }
}
