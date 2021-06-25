<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_documento')->nullable();
            $table->unsignedBigInteger('id_area')->nullable();

            $table->foreign('id_documento')
                    ->references('id')->on('documentos')
                    ->references('set null');

            $table->foreign('id_area')
                    ->references('id')->on('areas')
                    ->references('set null');
            
            $table->string('cod_hr', 10);
            $table->string('nro_hr', 10);
            $table->string('reg_hr', 10);
            $table->string('gestion', 10);
            $table->date('fecha_cite');
            $table->integer('nro_cite');
            $table->string('autor', 50);
            $table->string('nombre_des', 100);
            $table->string('cargo_des', 100);
            $table->string('inst_des', 100);
            $table->string('referencia', 250);
            $table->date('fecha_rec');
            
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
        Schema::dropIfExists('notas');
    }
}
