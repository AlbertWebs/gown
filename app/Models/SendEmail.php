<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mail;

class SendEmail extends Model
{

    public static function sendEmail($userID,$userName,$Sender,$SenderId,$message,$Subject){
        $data = array(
            'content'=>$message,
            'subject'=>$Subject,
        );

        Mail::send('mail', $data, function($message) use ($Subject,$Sender,$SenderId,$userID,$userName){
            $message->from($userID , $userName);
            $message->to($Sender, $SenderId)->cc('albertmuhatia@gmail.com')->subject($Subject);
        });
    }
}
