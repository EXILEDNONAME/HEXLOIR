<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up(): void 
    {
        Schema::create('main_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->timestamp('date')->nullable();
            $table->timestamp('datetime')->nullable();
            $table->string('file')->nullable();
                  $table->integer('pin')->nullable();
      $table->string('name')->nullable();
      $table->string('tags')->nullable();
      $table->string('categories')->nullable();
            $table->text('description')->nullable();
            $table->integer('active')->default(1);
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
        });
    }

    public function down(): void 
    {
        Schema::dropIfExists('main__posts');
    }
};
