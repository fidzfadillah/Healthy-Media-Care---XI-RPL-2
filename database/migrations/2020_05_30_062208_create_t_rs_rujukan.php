<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTRsRujukan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_rs_rujukan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_rs', 50);
            $table->text('alamat');
            $table->string('no_telp', 20);
            $table->string('halaman_web');
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
        Schema::dropIfExists('t_rs_rujukan');
    }
}
