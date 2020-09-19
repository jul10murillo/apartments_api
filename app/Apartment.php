<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public $table = "apartment";
    protected $fillable = ['name','description','price','address'];
    //
}
