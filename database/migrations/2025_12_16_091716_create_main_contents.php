<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up(): void 
    {
        Schema::create('main_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->timestamp('date')->nullable();
            $table->timestamp('datetime')->nullable();
            $table->string('file')->nullable();
            $table->integer('id_tag')->unsigned();
            $table->integer('id_category')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('active')->default(1);
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
            $table->foreign('id_tag')->references('id')->on('main_tags')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_category')->references('id')->on('main_categories')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    public function down(): void 
    {
        Schema::dropIfExists('main__contents');
    }
};
