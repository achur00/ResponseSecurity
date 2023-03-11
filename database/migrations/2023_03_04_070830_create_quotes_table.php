<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('company_name',50);
            $table->string('email',50);
            $table->string('mobile',50);
            $table->string('address',50);
            $table->string('service_type',50);
            $table->string('security_no',50);
            $table->string('location',50);
            $table->string('start_date');
            $table->string('end_date');
            $table->string('note', 255);
            $table->string('reference_src');
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
        Schema::dropIfExists('quotes');
    }
}
