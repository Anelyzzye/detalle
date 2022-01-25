<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoDetalle extends Mailable
{
    use Queueable, SerializesModels;

    public $colleciona;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($colleciona)
    {
        $this->colleciona = $colleciona;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.detalle-consumo');
    }
}
