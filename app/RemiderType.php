<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemiderType extends Model
{
    protected $table = "remidertype";
    public $primaryKey = "id";
   	public $timestamps = true;

   	 public function remiders(){
   	 	return $this->hasMany('App\RemiderTable','remidertype','id');
   	// 	return 555;
   	 }
}
