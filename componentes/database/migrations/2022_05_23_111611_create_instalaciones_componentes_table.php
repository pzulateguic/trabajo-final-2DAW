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
        Schema::create('instalaciones_componentes', function (Blueprint $table) {
            $table->id();
            $table->integer('idcliente');
          
            $table->integer('idactualizacionescomponentes');
            $table->timestamps();
            $table->string('observaciones')->nullable();
            
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instalaciones_componentes');
        
    }
};
