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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id'); //mengambil data guru
            $table->string('materipel');
            $table->foreignId('kelas_id'); //datakelas
            $table->text('absen');
            $table->string('jampel');
            $table->string('linkpem');
            $table->string('dokumentasi');
            $table->string('keterangan');
            $table->enum('jenispem',['offline','online']);
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
        Schema::dropIfExists('agendas');
    }
};
