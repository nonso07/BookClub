<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersFeild extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            //
            //$table->text('last_name');
            $table->string('phoneNum');
            $table->string('Reg_num');
            $table->string('department');
            $table->string('DOB');
            $table->boolean('paid_status')->default(false);
            $table->string('avater_name');
            $table->string('course')->nullable();
            $table->string('pay_through')->nullable();
            $table->string('card_pin')->nullable();
            $table->boolean('is_css_Student')->default(false);
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //dropColumn
        Schema::table('users', function (Blueprint $table) {
            //
           // $table->dropColum('last_name');
            $table->dropColum('phoneNum');
            $table->dropColum('Reg_num');
            $table->dropColum('department');
            $table->dropColum('DOB');
            $table->dropColum('paid_status')->default(false);
            $table->dropColum('avater_name');
            $table->dropColum('course')->nullable();
            $table->dropColum('pay_through')->nullable();
            $table->dropColum('card_pin')->nullable();
            $table->dropColum('is_css_Student')->default(false);
            
        });
            
    }
}
