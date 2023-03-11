<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pages;

class CreateServiceProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Page_id');
            $table->string('title', 50);
            $table->string('content');
            $table->longText('long_content');
            $table->longText('svg');
            $table->string('service_img');
            $table->timestamps();
            $table->foreign('page_id')
                
				->references('id')
                ->on('pages')
                ->onDelete('cascade') 
                ->onUpdate('cascade') 
                ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_products');
    }
}
