<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutValsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_vals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mis_title, 50');
            $table->longText('mis_content');
            $table->string('vis_title', 50);
            $table->longText('vis_content');
            $table->string('val_title, 50');
            $table->longText('val_content');
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
        Schema::dropIfExists('about_vals');
    }
}
