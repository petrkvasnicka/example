<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->tinyInteger('id');
            $table->integer('vehicle_id')->comment('Značka vozu');
            $table->integer('model_id')->comment('Model vozu');
            $table->double('price', 8, 2)->comment('Cena bez DPH');

            $table->integer('author_id')->comment('Kdo založil');
            $table->integer('editor_id')->nullable()->comment('Kdo naposledy upravil');
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
        Schema::dropIfExists('cars');
    }
}
