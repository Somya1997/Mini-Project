<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentMnnitController;
use App\StudentMnnit;
use App\ComplaintMnnit;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class closingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $closedMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($closedMail)
    {
        $this->closedMail=$closedMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mnnit.ccquesries@gmail.com', 'Computer Center MNNIT')
                    ->to($this->closedMail->email, $this->closedMail->name)
                    ->subject('Mnnit CcQueries')
                    ->view('email.closedMail');
    }
}