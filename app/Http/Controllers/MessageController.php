<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request){
        Event::dispatch(new OrderShipped($order));
        event(new Message($request->message,$request->user));
        return ["success" => true];
    }
}
