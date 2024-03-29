<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('phone');
            $table->string('email');
            $table->string('mobile');
            $table->string('fax');
            $table->string('lat');
            $table->string('lng');
            $table->string('address_1');
            $table->string('address_1_fa');
            $table->string('address_2')->nullable();
            $table->string('address_2_fa')->nullable();
            $table->string('address_3')->nullable();
            $table->string('address_3_fa')->nullable();
            $table->longText('aboutus');
            $table->longText('aboutus_fa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
