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
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('tran_id');
            $table->string('tran_bangku', 25);
            $table->string('tran_id_bus', 25);
            $table->string('tran_id_pen', 25);
            $table->string('tran_ongkos');
            $table->string('tran_hari', 100);
            $table->string('tran_jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
