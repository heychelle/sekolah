<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKelasToMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('murids', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('kelas')->index()->after('nama_murid');

            $table->foreign('kelas')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('murids', function (Blueprint $table) {
            //
            $table->dropColumn('kelas');
        });
    }
}
