<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours_prof', function (Blueprint $table) {
            $table->id();
            $table->integer('cours_id')->unsigned();
            $table->integer('prof_id')->unsigned();
            $table->timestamps();

            $table->foreign('cours_id')->references('id')->on('cours')
                ->onUpdated('cascade')
                ->onDelete('cascade');

            $table->foreign('prof_id')->references('id')->on('profs')
                ->onUpdated('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_cour__prof');
    }
}
