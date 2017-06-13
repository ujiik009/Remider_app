<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemiderType extends Model
{
    protected $table = "remidertype";
    public $primaryKey = "id";
   	public $timestamp = true;
}
