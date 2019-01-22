<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendcustomeremail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   public $name;
   public $sub;
   public $mess;
   public $replay;

    public function __construct($name,$subject,$replay, $message)
    {
         $this->name  = $name;
        $this->sub  =  $subject;
        $this->mess = $message;
        $this->replay=$replay;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $e_sub=$this->sub;
       $e_mess=$this->mess;
       $email_replay=$this->replay;
       $name=$this->name;
        return $this->view('mail.customermail',compact('name','e_sub','e_mess'))->subject($e_sub)->replyTo($email_replay);
    }
}
