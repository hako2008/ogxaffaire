<?php

namespace App\Mail;
use App;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class commentAnswerMail extends Mailable
{
    use Queueable, SerializesModels;
    public $commentid;
    
    public $content;
    public $name;
    public $email;
    public $responseid;
    public $lang;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($commentid,$name,$content,$email,$responseid,$lang)
    {
        $this->commentid = $commentid;
        $this->name = $name;
        $this->content = $content;
        $this->email = $email;
        $this->responseid = $responseid;
        $this->lang = $lang;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        App::setLocale($this->lang);
        return $this->from('noreply@ogxaffaire.com',trans('messages.ogxaffaireteam'))->subject(trans('messages.newcomment'))->view('commentAnswer');

    }
}
