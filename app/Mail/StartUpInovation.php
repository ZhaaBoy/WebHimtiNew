<?php

namespace App\Mail;

use App\Models\Startup;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Env;



class StartUpInovation extends Mailable
{
    use Queueable, SerializesModels;

    public $sr;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sr)
    {
        $this->sr = $sr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(Env('MAIL_USERNAME'))
            ->subject('HIFEST STARTUP INOVATION 2023')
            ->view('sr.mail')
            ->with([
                'nama_sekolah' => $this->sr
            ]);
    }
}
