<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iduser');
            $table->string('tanggalpengajuan');
            $table->string('tanggalterbit');
            $table->string('tanggalberakhir');
            $table->string('noregistrasi');
            $table->string('namaorganisasi');
            $table->string('bidangkegiatan');
            $table->string('ruanglingkup');
            $table->string('alamatsekretarian');
            $table->string('tempatpendirian');
            $table->string('waktupendirian');
            $table->string('asasorganisasi');
            $table->string('tujuanorganisasi');
            $table->string('namapendiri');
            $table->string('namapenasehat');
            $table->string('namapembina');
            $table->string('namaketua');
            $table->string('gelarketua');
            $table->string('panggilanketua');
            $table->string('tempatlahirketua');
            $table->string('tgllahirketua');
            $table->string('pendidikanketua');
            $table->string('agamaketua');
            $table->string('statusketua');
            $table->string('jeniskelaminketua');
            $table->string('emailketua');
            $table->string('nohpketua');
            $table->string('namasekretaris');
            $table->string('gelarsekretaris');
            $table->string('panggilansekretaris');
            $table->string('tempatlahirsekretaris');
            $table->string('tgllahirsekretaris');
            $table->string('pendidikansekretaris');
            $table->string('agamasekretaris');
            $table->string('statussekretaris');
            $table->string('jeniskelaminsekretaris');
            $table->string('emailsekretaris');
            $table->string('nohpsekretaris');
            $table->string('namabendahara');
            $table->string('gelarbendahara');
            $table->string('panggilanbendahara');
            $table->string('tempatlahirbendahara');
            $table->string('tgllahirbendahara');
            $table->string('pendidikanbendahara');
            $table->string('agamabendahara');
            $table->string('statusbendahara');
            $table->string('jeniskelaminbendahara');
            $table->string('emailbendahara');
            $table->string('nohpbendahara');
            $table->string('masabakti');
            $table->string('keputusantertinggi');
            $table->string('usaha');
            $table->string('sumberkeuangan');
            $table->string('logo');
            $table->string('bendera');
            $table->string('akte');
            $table->string('adart');
            $table->string('programkerja');
            $table->string('skpengurus');
            $table->string('ktppengurus');
            $table->string('skdomisili');
            $table->string('npwp');
            $table->string('fotosekretariat');
            $table->string('skpenggunaansekretariat');
            $table->string('tahap');
            $table->string('notif');
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
        Schema::drop('organisasi');
    }
}
