<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RemiderTable extends Model
{
	use SoftDeletes;
	protected $table = "remider_table";
	public $primaryKey = "id";
	public $timestamps = true;

	public function type(){
		// find table remidertype ('App\Phone', 'Source column fk' ,'destination column fk');
		return $this->belongsTo(RemiderType::class,'remidertype','id');
	}
}

