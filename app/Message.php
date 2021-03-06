<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message'];
    public function users(){
    	return $this-> belongsTo(User::class);
    }
}
