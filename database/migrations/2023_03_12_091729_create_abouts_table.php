<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
             $table->increments('id');
             $table->unsignedInteger('Page_id');
            $table->string('title_f', 50);
            $table->longText('f_content');
            $table->string('title_s', 50);
            $table->longText('s_content');
            $table->string('founder', 100);
            $table->timestamps();
             $table->foreign('page_id')
                
				->references('id')
                ->on('pages')
                ->onDelete('cascade') 
                ->onUpdate('cascade') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
