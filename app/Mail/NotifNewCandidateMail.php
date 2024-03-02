<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifNewCandidateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $candidate;

    /**
     * Create a new message instance.
     */
    public function __construct($candidate)
    {
        $this->candidate = $candidate;
    }

    public function build()
    {
        $this->subject('Nouvel Candidature');

        $this->attach('storage/' . $this->candidate->resume, ['as' => basename($this->candidate->resume)]);
        $this->attach('storage/' . $this->candidate->cid, ['as' => basename($this->candidate->cid)]);
        $this->attach('storage/' . $this->candidate->avatar, ['as' => basename($this->candidate->avatar)]);

        return $this->view('email.admin')->with([
            $this->candidate,
        ]);
    }
}
