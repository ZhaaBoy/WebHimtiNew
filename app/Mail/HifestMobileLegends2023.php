<?php

namespace App\Mail;

use App\Models\MobileLegends;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Env;

class HifestMobileLegends2023 extends Mailable
{
    use Queueable, SerializesModels;

    public $ml;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ml)
    {
        $this->ml = $ml;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(Env('MAIL_USERNAME'))
            ->subject('HIFEST MOBILE LEGENDS 2023')
            ->view('ml.mail')
            ->with([
                'nama_team' => $this->ml
            ]);
    }
}
