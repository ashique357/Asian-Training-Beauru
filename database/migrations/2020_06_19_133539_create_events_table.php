<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('event_type');
            $table->string('date');
            $table->string('time')->nullable();
            $table->string('location')->nullable();
            $table->longText('purpose')->nullable();
            $table->string('contact')->nullable();
            $table->string('fees')->nullable();
            $table->string('image')->nullable();
            $table->boolean('registration')->default(0);
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
        Schema::dropIfExists('events');
    }
}
