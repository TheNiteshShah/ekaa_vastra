<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->references('id')->on('category')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->integer('sequence')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->integer('added_by')->nullable();
            $table->smallInteger('is_active')->nullable();
            $table->softDeletes('deleted_at');
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
        Schema::dropIfExists('subcategory');
    }
}
