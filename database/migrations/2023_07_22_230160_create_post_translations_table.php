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
        Schema::create('post_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned(); // translation of any post id
            $table->string('locale')->index(); // ar or fr or en or es

            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->string('smallDesc')->nullable();

            $table->unique(['post_id', 'locale']); // only one post for a lang
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_translations');
    }
};
