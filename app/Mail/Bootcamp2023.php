<?php

namespace App\Mail;

use App\Models\bootcamp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Env;


class Bootcamp2023 extends Mailable
{
    use Queueable, SerializesModels;

    public $btcmp1;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($btcmp1)
    {
        $this->btcmp1 = $btcmp1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(Env('MAIL_USERNAME'))
            ->subject('HIMTI BOOTCAMP 2023')
            ->view('pendaftaran.bootcamp.mail')
            ->with([
                'nama' => $this->btcmp1
            ]);
    }
}
