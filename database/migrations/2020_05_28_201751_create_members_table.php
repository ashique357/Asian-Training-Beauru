<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('country')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('desg')->nullable();
            // $table->string('org')->nullable();
            $table->string('exp')->nullable();
            $table->string('photo')->default('avatar.jpg')->nullable();
            $table->text('msg')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('con_person')->nullable();
            $table->string('web')->nullable();
            $table->string('employee')->nullable();
            $table->string('member_type');
            $table->boolean('approved')->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('reg_id');
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
        Schema::dropIfExists('members');
    }
}
