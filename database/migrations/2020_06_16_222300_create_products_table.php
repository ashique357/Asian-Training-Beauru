<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('product_type');
            $table->string('filenames');
            $table->string('cover_image');
            $table->string('author_name')->nullable();
            $table->string('publication')->nullable();
            $table->string('issn')->nullable();
            $table->longText('content')->nullable();
            $table->longText('material_details')->nullable();
            $table->longText('tools_details')->nullable();
            $table->string('price_user')->nullable()->default('0');
            $table->string('price_member')->nullable()->default('0');
            $table->string('currency')->nullable()->default('USD');
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
        Schema::dropIfExists('products');
    }
}
