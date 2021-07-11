<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('book_upload', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Book_Titel');
            $table->text('booK_Summry');
            $table->boolean('enabled')->default(true);
            $table->timestamps();
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
