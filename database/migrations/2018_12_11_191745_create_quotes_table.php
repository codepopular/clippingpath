<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('service_type');
            $table->string('turnaround');
            $table->string('need_path');
            $table->string('qty');
            $table->string('find_us');
            $table->string('des');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('website');
            $table->string('company');
            $table->string('phone');
            $table->string('country');
            $table->string('currency');
            $table->string('photo');
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
