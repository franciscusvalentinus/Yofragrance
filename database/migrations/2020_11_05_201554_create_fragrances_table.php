<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFragrancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fragrances', function (Blueprint $table) {
            $table->id();
            $table->string('nameFragrance');
            $table->string('brandFragrance');
            $table->string('priceFragrance');
            $table->string('typeFragrance');
            $table->string('aromaFragrance');
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
        Schema::dropIfExists('fragrances');
    }
}
