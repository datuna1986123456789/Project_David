<?php

namespace App\Http\Controllers\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\OrderShipped;
use App\Order;

class OrederController extends Controller
{
   
    /**
     * Ship the given order.
     *
     * @param  int  $orderId
     * @return Response
     */
    public function ship($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Order shipment logic...

        event(new OrderShipped($order));
    }

}
