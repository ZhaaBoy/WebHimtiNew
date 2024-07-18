<?php

namespace App\Mail;

use App\Models\MobileLegends;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Env;

class WebDesign extends Mailable
{
    use Queueable, SerializesModels;

    public $web;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($web)
    {
        $this->web = $web;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(Env('MAIL_USERNAME'))
            ->subject('HIFEST WEB DESIGN 2023')
            ->view('web-design.mail')
            ->with([
                'nama_team' => $this->web
            ]);
    }
}
