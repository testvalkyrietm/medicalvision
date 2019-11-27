<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public static function html_email($data) {
        Mail::send($data['mail_template'], ['details'=>$data['formdata']], function($message) use ($data) {
            $message->to($data['to'], $data['toname'])->subject
            ($data['mail_template']);
        });
    }
}
