<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_penumpang', function (Blueprint $table) {
            $table->increments('pen_id');
            $table->string('pen_nama', 25);
            $table->string('pen_asal', 100);
            $table->string('pen_hp');
            $table->string('pen_gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_penumpang');
    }
};
