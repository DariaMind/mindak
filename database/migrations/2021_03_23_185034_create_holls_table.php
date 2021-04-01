<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holls', function (Blueprint $table) {
            $table->id();
          $table->string('holl_number');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string ('email')->nullable();
            $table->text('address')->nullable();
            $table->string('timetable_img')->nullable();
            $table->string('map_img')->nullable();
            $table->string('map_link')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('holls');
    }
}
