<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
	public $subject;
	public $message;
	public $from_address;
	public $from_name;
	public $cc_address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $message_content, $from_address, $from_name, $cc_address)
    {
        
		$this->subject = $subject;
		$this->message = $message_content;
		$this->from_address = $from_address;
		$this->from_name = $from_name;
		$this->cc_address = $cc_address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email_templates.forgot');
    }
}