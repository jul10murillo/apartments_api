<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interested extends Model
{
    public $table = "interested";
    protected $fillable = ['name','phone','email'];
}
