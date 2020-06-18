<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            //ENGLISH COLUMNS
            $table->string("date");
            $table->string("name");
            $table->string("role");
            $table->string("client");
            $table->string("description");
            $table->string("imageurl");
            $table->string("url");
            // FRENCH COLUMNS
            $table->string("frname");
            $table->string("frdate");
            $table->string("frrole");
            $table->string("frdescription");
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
        Schema::dropIfExists('projects');
    }
}
