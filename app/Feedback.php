<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Feedback
{
   public $success;
   public $alert;
   public $error;
   
   function __contruct(){
       $this->success = null;
       $this->alert = null;
       $this->error = null;
   }
}
