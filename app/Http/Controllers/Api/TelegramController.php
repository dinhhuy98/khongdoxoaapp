<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram;

class TelegramController extends Controller
{
    //
     public function pushNotify(Request $request){
        $text = "Hi";
        Telegram::sendMessage([
            'chat_id'=>'-1001578553614',
            'parse_mode'=>'HTML',
            'text'=>$text
        ]);
        return;
    }
}
