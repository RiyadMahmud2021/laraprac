<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_table',function(Blueprint $table){
            $table->bigIncrements('id'); // why not writing $this keyword here? // Dependency Injection
            $table->bigInteger('votes');
            $table->binary('img');
            $table->boolean('confirmed');
            $table->dateTimeTz('created_at');
            $table->ipAddress('visitor');
            $table->longText('description');
            $table->string('city', 1000);
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
