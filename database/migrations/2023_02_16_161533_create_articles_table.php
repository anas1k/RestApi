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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30)->nullable(false);
            $table->string('content')->nullable(false);
            $table->string('author')->nullable(false);
            $table->string('category')->nullable(false);
            $table->date('published_at')->nullable(false);
            $table->timestamps();
            // to create foreign key
            // $table->bigInteger('role_id')->unsigned()->index()->nullable();
            // $table->foreign('role_id')->references('id')->on('roles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
