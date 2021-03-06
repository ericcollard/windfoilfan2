<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('roles')->default('["ROLE_VISITOR"]');
            $table->string('avatar_path')->nullable();
            $table->string('prefered_spots')->nullable();
            $table->timestamp('discipline_start')->nullable();
            $table->text('personal_equipment')->nullable();
            $table->string('postal_code')->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
