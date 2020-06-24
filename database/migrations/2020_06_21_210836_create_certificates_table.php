<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('medium');
            $table->integer('modules')->nullable();
            $table->string('approx')->nullable();
            $table->string('level')->nullable();
            $table->string('fees')->nullable();
            $table->string('image')->nullable();
            $table->string('currency')->default('USD')->nullable();
            $table->longText('details')->nullable();
            $table->longText('context')->nullable();
            $table->longText('evaluation')->nullable();
            $table->longText('objective')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('certificates');
    }
}
