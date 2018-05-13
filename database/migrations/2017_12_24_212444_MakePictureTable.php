<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakePictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->string('original_filename', 256);
            $table->string('new_filename', 256);
            $table->string('path', 256);
            $table->string('full_path', 512);
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('pictures');
    }
}
