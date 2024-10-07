<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    // public $msg;
    public $status;
    public $statusMessage;
    public $post;
    /**
     * Create a new message instance.
     */
    public function __construct($post, $status)
    {
        // $this->$msg=$msg;
        $this->status =$status;
        $this->statusMessage = $status == 'accepted' ? 'Your request has been accepted!' : 'Your request has been rejected!';
        $this->post = $post;
    }


     /**
     * মেসেজ তৈরি করুন।
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail')
                    ->subject($this->statusMessage);
    }
    

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
