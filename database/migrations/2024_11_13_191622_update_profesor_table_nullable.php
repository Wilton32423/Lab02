<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('profesor', function (Blueprint $table) {
            $table->string('departamento')->nullable()->change();
            $table->string('especialidad')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('profesor', function (Blueprint $table) {
            $table->string('departamento')->nullable(false)->change();
            $table->string('especialidad')->nullable(false)->change();
        });
    }
};
