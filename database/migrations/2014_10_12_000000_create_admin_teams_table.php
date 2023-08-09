<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateAdminTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->string('phone',255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('power')->nullable();
            $table->json('services')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->integer('added_by')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_teams');
    }
}
