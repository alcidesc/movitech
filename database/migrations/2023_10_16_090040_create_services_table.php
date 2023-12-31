<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo')->nullable();
            $table->string('slug')->unique();
            $table->longText('descripcion')->nullable();;
            $table->integer('precio');
            $table->integer('precio2')->nullable();
            $table->integer('precio3')->nullable();
            $table->integer('oferta')->nullable();
            $table->integer('iva')->default(10);
            $table->boolean('estado')->default(1);
            $table->string('foto',300)->nullable();
            

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
        Schema::dropIfExists('services');
    }
};
