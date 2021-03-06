<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
  protected $table = 'organisasi';
	protected $fillable = [
        'iduser',
        'tanggalpengajuan',
        'tanggalterbit',
        'tanggalberakhir',
        'noregistrasi',
        'namaorganisasi',
        'bidangkegiatan',
        'ruanglingkup',
        'alamatsekretarian',
        'tempatpendirian',
        'waktupendirian',
        'asasorganisasi',
        'tujuanorganisasi',
        'namapendiri',
        'namapenasehat',
        'namapembina',
        'namaketua',
        'gelarketua',
        'panggilanketua',
        'tempatlahirketua',
        'tgllahirketua',
        'pendidikanketua',
        'agamaketua',
        'statusketua',
        'jeniskelaminketua',
        'emailketua',
        'nohpketua',
        'namasekretaris',
        'gelarsekretaris',
        'panggilansekretaris',
        'tempatlahirsekretaris',
        'tgllahirsekretaris',
        'pendidikansekretaris',
        'agamasekretaris',
        'statussekretaris',
        'jeniskelaminsekretaris',
        'emailsekretaris',
        'nohpsekretaris',
        'namabendahara',
        'gelarbendahara',
        'panggilanbendahara',
        'tempatlahirbendahara',
        'tgllahirbendahara',
        'pendidikanbendahara',
        'agamabendahara',
        'statusbendahara',
        'jeniskelaminbendahara',
        'emailbendahara',
        'nohpbendahara',
        'masabakti',
        'keputusantertinggi',
        'usaha',
        'sumberkeuangan',
        'logo',
        'bendera',
        'akte',
        'adart',
        'programkerja',
        'skpengurus',
        'ktppengurus',
        'skdomisili',
        'npwp',
        'fotosekretariat',
        'skpenggunaansekretariat',
        'tahap',
        'notif' ];
}
