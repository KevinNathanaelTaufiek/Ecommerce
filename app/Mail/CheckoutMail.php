<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckoutMail extends Mailable
{
    use Queueable, SerializesModels;

    public $products;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($produk, $user)
    {
        $this->products = $produk;
        $this->user = $user->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pembelian Barang Sukses!')->view('template.mail');
    }
}
