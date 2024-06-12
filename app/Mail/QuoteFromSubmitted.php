<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuoteFromSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $mobile;
    public $messagess;
    public $recipientType; // 'business' or 'customer'

    public function __construct($name, $email, $mobile, $messagess, $recipientType)
    {
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->messagess = $messagess;
        $this->recipientType = $recipientType;
    }

    public function build()
    {
        $subjects = $this->recipientType === 'business' ? 'New Quotation Recived' : 'Thank You, Our staff will be in touch with you soon';

        return $this->from('no-reply@industrial.gadgeon.com')
            ->subject($subjects)
            ->view('emails.quote-form-submitted');
    }
}
