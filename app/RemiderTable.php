<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemiderTable extends Model
{
	protected $table = "remider_table";
	public $primaryKey = "id";
	public $timestamps = true;

	public function type(){
		// find table remidertype ('App\Phone', 'Source column fk' ,'destination column fk');
		return $this->belongsTo(RemiderType::class,'remidertype','id');
	}
}

