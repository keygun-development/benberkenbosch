<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->date('publish_date');
            $table->string('thumbnail');
            $table->string('embed_link');
            $table->string('cover');
            $table->longText('description');
            $table->string('artwork');
            $table->string('buttontext');
            $table->longText('buttonlink');
            $table->string('cover_art');
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
        Schema::dropIfExists('albums');
    }
};
