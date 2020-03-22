<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',128);
            $table->string('nombre',128);
            $table->string('descripcion',256);
            $table->integer('stock');
            $table->integer('punto_reorden');
            $table->float('precio', 12, 2);
            $table->float('impuesto', 8, 2)->default(0);
            $table->float('monto_impuesto', 8, 4);
            $table->float('monto_total', 12, 2);
            $table->string('url_foto',512)->default('img/fotos/articulo_tienda_default.png');

            // Anadimos la clave foranea con Tienda. tienda_id
            $table->integer('tienda_id')->unsigned();
            $table->foreign('tienda_id')->references('id')->on('tiendas')->onDelete('cascade');

            // Anadimos la clave foranea con Subcategoria. subcategoria_id
            $table->integer('subcategoria_id')->unsigned();
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias')->onDelete('cascade');

            // Creacion de indices
            $table->unique(['codigo', 'tienda_id']);

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
        Schema::dropIfExists('articulos');
    }
}
