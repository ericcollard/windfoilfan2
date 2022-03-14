<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicaldatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicaldatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('device_id');
            $table->unsignedInteger('user_id');
            $table->text('body')->nullable();
            $table->string('serial')->nullable();
            for ($i = 3; $i <= 25; $i++) {
                $table->Double('attr'.$i)->nullable();
            }
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
        Schema::dropIfExists('technicaldatas');
    }
}
