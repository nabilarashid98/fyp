<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    public $table = 'Feedback';
    public $fillable = ['name','email','phonenumber','message'];

}
