<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateAdminSidebar2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_sidebar2', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sidebar1_id')->nullable()->constrained()->references('id')->on('admin_sidebar1');
            $table->string('name')->nullable();
            $table->integer('seq')->nullable();
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('admin_sidebar2');
    }
}
