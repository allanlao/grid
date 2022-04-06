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
        Schema::create('paths', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('nodeA');
            $table->foreign('nodeA')->references('id')->on('nodes');
            $table->unsignedBigInteger('nodeB');
            $table->foreign('nodeB')->references('id')->on('nodes');
            $table->enum('status',['active','inactive']);
            $table->enum('type',['foc','wireless']);
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
        Schema::dropIfExists('paths');
    }
};
