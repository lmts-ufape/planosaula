<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignPlanos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('planos', function (Blueprint $table) {
        	
        	   $table->foreign('campoexperiencia_id')
        	   		->references('id')->on('campoexperiencias');
            $table->foreign('areatematica_id')
            		->references('id')->on('areatematicas');
            $table->foreign('componentecurricular_id')
            		->references('id')->on('componentecurriculars');
            $table->foreign('areaconhecimento_id')
            		->references('id')->on('areaconhecimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('planos', function (Blueprint $table) {
            $table->dropForeign('planos_campoexperiencia_id_foreign');
            $table->dropForeign('planos_areatematica_id_foreign');
            $table->dropForeign('planos_componentecurricular_id_foreign');
            $table->dropForeign('planos_areaconhecimento_id_foreign');
        });
    }
}
