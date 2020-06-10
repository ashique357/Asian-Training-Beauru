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
            $table->string('banner_paragraph')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_url')->nullable();
            $table->string('btn_name')->nullable();

            //course
            $table->string('course_title')->nullable();
            $table->string('course_url')->nullable();
            
            //faculty
            $table->string('faculty_title')->nullable();
            $table->string('faculty_paragraph')->nullable();
            $table->string('faculty_url')->nullable();
           

            //extras
            $table->string('fb_url')->nullable();
            $table->string('twitt_url')->nullable();
            $table->string('f_para1')->nullable();
            $table->string('f_para2')->nullable();
            $table->string('f_para3')->nullable();

            //about-section
            $table->string('about_image')->nullable();
            $table->longtext('about_content')->nullable();
            $table->string('about_president_image')->nullable();
            $table->longtext('about_saying')->nullable();

            //membership-section
            $table->string('membership_image')->nullable();
            $table->longtext('membership_benefit')->nullable();
            $table->longtext('membership_way')->nullable();
            
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
