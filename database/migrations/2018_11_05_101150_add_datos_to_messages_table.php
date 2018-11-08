<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatosToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->boolean('mayorDeEdad')->nullable();
            $table->decimal('salario', 8, 2);
            $table->date('fecha_nacimiento');
            $table->string('contrasena');
            $table->text('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropcolumn('mayorDeEdad');
            $table->dropcolumn('salario');
            $table->dropcolumn('fecha_nacimiento');
            $table->dropcolumn('contrasena');
            $table->dropcolumn('descripcion');
        });
    }
}
