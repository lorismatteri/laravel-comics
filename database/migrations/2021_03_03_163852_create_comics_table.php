<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('cover')->nullable()->default('');
            $table->float('price')->nullable()->default(0);
            $table->boolean('available')->nullable()->default(0);
            $table->string('designer')->nullable()->default('');
            $table->string('author')->nullable()->default('');
            $table->string('serie')->nullable()->default('');
            $table->integer('volume')->nullable()->default(0);
            $table->string('size')->nullable()->default('');
            $table->integer('page_count')->nullable()->default(0);
            $table->string('rating')->nullable()->default('');
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
        Schema::dropIfExists('comics');
    }
}
