<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 32);
            $table->string('last_name', 32);
            $table->string('display_name', 64);
            $table->string('email', 64);
            $table->string('phone', 16);
            $table->text('linkedin');
            $table->text('github');
            $table->text('websites');
            $table->text('description')->nullable();
            $table->integer('picture_id')->nullable();
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
        Schema::dropIfExists('person');
    }
}
