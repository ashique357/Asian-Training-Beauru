<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->default('11');
            $table->string('org_name')->nullable();
            $table->string('country');
            $table->longText('assignment_details')->nullable();
            $table->longText('requirements')->nullable();
            $table->string('approx')->nullable();
            $table->string('fees')->nullable();
            $table->string('position')->nullable();
            $table->string('location')->nullable();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
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
        Schema::dropIfExists('opportunities');
    }
}
