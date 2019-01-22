<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateButtonlinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buttonlinks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trial_period')->nullable();
            $table->string('get_quote')->nullable();
            $table->string('faq')->nullable();
            $table->string('request_us')->nullable();
            $table->string('about_more')->nullable();
            $table->string('service_more')->nullable();
            $table->string('simple_project_more')->nullable();
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
        Schema::dropIfExists('buttonlinks');
    }
}
