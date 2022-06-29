<?php

namespace App\Models;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Delivery extends Model
{
  use  HasFactory;


  

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
