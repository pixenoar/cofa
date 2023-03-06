<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(){
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('foto');
            $table->unsignedTinyInteger('orden');
        });
    }

    public function down(){
        Schema::dropIfExists('areas');
    }
    
};
