<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('slug',50)->unique();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id');
            $table->string('status')->default('Published'); // Published : Hidden : Archived
            $table->text('body');
            $table->year('year')->nullable();
            $table->unsignedDecimal('price', 8, 2)->nullable();
            $table->string('link_test')->nullable();
            $table->string('link_presentation')->nullable();
            $table->string('link_product')->nullable();
            $table->Double('programme_start')->nullable();
            $table->Double('programme_end')->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->string('last_ip',20)->nullable();
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
        Schema::dropIfExists('devices');
    }
}
