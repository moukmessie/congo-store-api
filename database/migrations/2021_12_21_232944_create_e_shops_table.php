<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_shops', function (Blueprint $table) {
            $table->id();
            $table->string('store_siret')->nullable()->default(null);
            $table->string('store_name');
            $table->string('phone');
            $table->string('email');
            $table->string('street');
            $table->string('city_name');
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
        Schema::dropIfExists('e_shops');
    }
}
