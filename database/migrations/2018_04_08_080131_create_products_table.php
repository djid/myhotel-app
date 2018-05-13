<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('slug')->default('');
            $table->string('adresse');
            $table->string('telephone');
            $table->integer('nbre_chambre');
            $table->string('ville');
            $table->integer('nbre_de_lit');
            $table->string('type_de_chambre');
            $table->string('montant');
            $table->text('description');
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
        Schema::dropIfExists('product');
    }
}
