<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landings', function (Blueprint $table) {
            $table->id();
            //top-nav
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('time')->nullable();
            //menu
           
            
            //banner
            $table->string('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            
            //team
            $table->string('team_title')->nullable();
            $table->longText('team_details')->nullable();

            //extras
            
            $table->longText('f_para1')->nullable();
            $table->longText('f_para2')->nullable();
            $table->longText('f_para3')->nullable();

            //about-section
            $table->string('about_image')->nullable();
            $table->longtext('about_content')->nullable();
            $table->string('about_president_image')->nullable();
            $table->longtext('about_saying')->nullable();

            //membership-section
            $table->string('membership_image')->nullable();
            $table->longtext('membership_benefit')->nullable();
            $table->longtext('membership_way')->nullable();

            //certification
            $table->longText('certification_benefit')->nullable();
            $table->longText('way_to_certified')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landings');
    }
}
