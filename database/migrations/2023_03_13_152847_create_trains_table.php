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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company');
            $table->string('departure');
            $table->string('arrival');
            $table->date('departure_date');
            $table->time('departure_hour');
            $table->date('arrival_date');
            $table->time('arrival_hour');
            $table->smallInteger('train_code')->unsigned()->unique();
            $table->tinyInteger('carriage_number')->unsigned();
            $table->boolean('train_delay');
            $table->boolean('train_cancelled');
            $table->float('price', 6, 2);
            $table->tinyInteger('change_number')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
