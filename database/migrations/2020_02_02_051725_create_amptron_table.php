<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmptronTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amptron', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand'); 
            $table->string('type');
            $table->string('code');
            $table->string('purchaseorder')->unique();
            $table->string('serialnumber')->unique();
            $table->string('spec');
            $table->string('customer');
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
        Schema::dropIfExists('amptron');
    }
}
