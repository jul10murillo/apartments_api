<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentInterested extends Model
{
    public $table = "apartment_interested";
    protected $fillable = ['apartment_id','interested_id'];
}
