<?php

namespace Shihab\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    protected $message='',$name='';

    /**
     * Create a new message instance.
     *
     * @param $message
     * @param $name
     */
    public function __construct($message,$name)
    {
        $this->message=$message;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')
            ->with(['message'=>$this->message,'name'=>$this->name]);
    }
}
