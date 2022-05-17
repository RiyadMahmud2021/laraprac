<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllTableDeleteColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   // one time use (same file will not be able work again, rebuild the file with command) 
        Schema::table('students',function(Blueprint $table){
            $table->dropColumn(['created_at','updated_at']);
        });


        Schema::table('all_table',function(Blueprint $table){
            $table->dropColumn(['created_at','confirmed']);
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
