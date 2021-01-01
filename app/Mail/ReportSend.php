<?php

namespace App\Mail;

use App\Http\Controllers\Sale;
use App\Services\ClientApi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportSend extends Mailable
{
    use Queueable, SerializesModels;
    private $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("Relatório diário de vendas");
        $this->to($this->email);
        return $this->markdown('emails.report-send',[
            'currentDay' => date('d/m/Y'),
            'relatorio' => ClientApi::get(Sale::endpoint)
        ]);
    }
}
