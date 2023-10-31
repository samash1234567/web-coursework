<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            //add userid and categoryid
            $table->timestamps();

            $table->foreign('categoryid')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('postid')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
};
