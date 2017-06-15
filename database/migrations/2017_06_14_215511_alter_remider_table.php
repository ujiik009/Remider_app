<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRemiderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remider_table', function (Blueprint $table) {
            
            $table->integer('remidertype')->unsigned()->nullable();
            $table->foreign('remidertype')->references('id')->on('remidertype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remider_table', function (Blueprint $table) {
            //
        });
    }
}
