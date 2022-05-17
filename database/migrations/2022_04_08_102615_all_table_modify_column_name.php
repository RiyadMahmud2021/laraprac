<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllTableModifyColumnName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   // one time use migratio file...
        Schema::table('students',function(Blueprint $table){
           
            // $table->renameColumn('stu_name', 'name')->change();

        });

        Schema::table('all_table',function(Blueprint $table){
            // $table->renameColumn('citys', "city")->change();
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
