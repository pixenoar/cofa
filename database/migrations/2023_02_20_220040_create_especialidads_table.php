<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(){
        Schema::create('especialidads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->string('nombre');
            $table->boolean('estado')->default(1);
            // FKs
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    public function down(){
        Schema::dropIfExists('especialidads');
    }

};
