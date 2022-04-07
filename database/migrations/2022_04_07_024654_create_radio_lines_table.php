<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radio_lines', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->text('description')->nullable();
            $table->string('latA',50);
            $table->string('lngA',50);
            $table->string('latB',50);
            $table->string('lngB',50);
            $table->enum('status',['active','inactive']);
         
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
        Schema::dropIfExists('radio_lines');
    }
};
