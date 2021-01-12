<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {
      $data = array('name'=>"raghad alkadi");

      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('coolkoki8@gmail.com')->subject
            ('Laravel Basic Testing Mail');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"raghad alkadi");
      Mail::send('mail', $data, function($message) {
         $message->to('coolkoki8@gmail.com')->subject
            ('Laravel HTML Testing Mail');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('name'=>"raghad alkadi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}
