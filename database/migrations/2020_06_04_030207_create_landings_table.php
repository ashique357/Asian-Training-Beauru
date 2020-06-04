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
            // $table->string('menu_id')->nullable();
            
            //banner
            $table->string('banner_image')->nullable();
            $table->string('banner_paragraph')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_url')->nullable();

            //course
            $table->string('course_title')->nullable();
            $table->string('course_url')->nullable();
            
            //faculty
            $table->string('faculty_title')->nullable();
            $table->string('faculty_paragraph')->nullable();
            $table->string('faculty_url')->nullable();
            //$table->string('team_member_id')->nullable();

            //popular course
            // $table->string('popular_course_id')->nullable();

            //blog post
            // $table->string('blog_id')->nullable();

            //extras
            $table->string('fb_url')->nullable();
            $table->string('twitt_url')->nullable();
            $table->string('f_para1')->nullable();
            $table->string('f_para2')->nullable();
            $table->string('f_para3')->nullable();
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
