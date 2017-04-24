<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     *
     * @var Order
     */
    public $order;

    /**
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.shipped')
            ->with([
                'first_name' => $this->order->first_name;
                'nationality' => $this->order->nationality;
                'department' => $this->order->department;
                'email' => $this->order->email;
                ]);
    }
}