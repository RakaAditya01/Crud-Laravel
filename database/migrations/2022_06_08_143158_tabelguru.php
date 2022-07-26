<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Nette\Schema\Schema as SchemaSchema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabels',function(Blueprint $table){
        $table->id();
        $table->string('namaguru');
        $table->enum('matapelajaran', ['MTK', 'B.Indonesia', 'B.Inggris', 'PAI', 'Penjaskes']);
        $table->string('materipelajaran');
        $table->enum('jampelajaran', ['06:30-09:00', '09:30-12:00']);
        $table->enum('absensi', ['Hadir', 'Tidak Hadir']);
        $table->string('namakelas');
        $table->enum('jenispembelajaran', ['Online', 'Offline']);
        $table->string('linkpembelajaran');
        $table->string('dokumentasi');
        $table->string('keterangan');
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
        //
    }
};
