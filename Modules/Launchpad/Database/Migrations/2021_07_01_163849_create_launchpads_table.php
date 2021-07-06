<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaunchpadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('launchpads', function (Blueprint $table) {
            $table->id();
            $table->string('provider_id');
            $table->string('full_name');
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('locality')->nullable();
            $table->string('region');
            $table->string('timezone')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->integer('launch_attempts')->nullable();
            $table->integer('launch_successes')->nullable();
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
        Schema::dropIfExists('launchpads');
    }
}
