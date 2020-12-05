<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nilai', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 15);
            $table->string('nama', 60);
            $table->string('semester', 10);
            $table->string('mata_pelajaran', 60);
            $table->string('tugas_1', 11);
            $table->string('tugas_2', 11);
            $table->string('tugas_3', 11);
            $table->string('uts', 11);
            $table->string('uas', 11);
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
        Schema::dropIfExists('Nilai');
    }
}
