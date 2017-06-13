<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemiderTable extends Model
{
    	protected $table = "remider_table";
    	public $primaryKey = "id";
   		public $timestamp = true;
}
