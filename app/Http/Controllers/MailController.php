<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function basic_email()
    {
        $data = array('name'=>'mohammed mohsen');
        Mail::send(['text','mail'],$data,function($message){
            $message->to('mohmohsen20012@gmail.com','codename')->subject('laravel html mail test');
            $message->from('mohmohsen2003@gmail.com','mohammed mohsen');
        });
        echo "basc email send check your inbox";
    }

    public function attachment_email()
    {
        $data = array('name'=>'mohammed mohsen');
        Mail::send('mail',$data,function($message){
            $message->to('mohmohsen20012@gmail.com','codename')->subject('laravel test mail wih attachment ');
            $message->attach('c://Users/al/Desktop/photo_2022-10-19_14-04-14.jpg');
            $message->from('mohmohsen2003@gmail.com','mohammed mohsen');

        });
        echo "email sent with the attachment check your mail inbox ";

    }
}
