<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use Organisasi;
use App\Http\Requests;

class AksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ijinbaru(Request $request)
    {
        $user = Auth::user();
        $data = array(
          'iduser' => $user->id,
          'noregistrasi'=> $request->get('noregistrasi'),
          'namaorganisasi' => $request->get('namaorganisasi'),
          'bidangkegiatan' => $request->get('bidangkegiatan'),
          'ruanglingkup' => $request->get('ruanglingkup'),
          'alamatsekretarian' => $request->get('alamatsekretarian'),
          'tempatpendirian' => $request->get('tempatpendirian'),
          'waktupendirian' => $request->get('waktupendirian'),
          'asasorganisasi' => $request->get('asasorganisasi'),
          'tujuanorganisasi' => $request->get('tujuanorganisasi'),
          'namapendiri' => $request->get('namapendiri'),
          'namapenasehat' => $request->get('namapenasehat'),
          'namapembina' => $request->get('namapembina'),
          'namaketua' => $request->get('namaketua'),
          'gelarketua' => $request->get('gelarketua'),
          'panggilanketua' => $request->get('panggilanketua'),
          'tempatlahirketua' => $request->get('tempatlahirketua'),
          'tgllahirketua' => $request->get('tgllahirketua'),
          'pendidikanketua' => $request->get('pendidikanketua'),
          'agamaketua' => $request->get('agamaketua'),
          'statusketua' => $request->get('agamaketua'),
          'jeniskelaminketua' => $request->get('statusketua'),
          'emailketua' => $request->get('emailketua'),
          'nohpketua' => $request->get('nohpketua'),
          'namasekretaris' => $request->get('namasekretaris'),
          'gelarsekretaris' => $request->get('gelarsekretaris'),
          'panggilansekretaris' => $request->get('panggilansekretaris'),
          'tempatlahirsekretaris' => $request->get('tempatlahirsekretaris'),
          'tgllahirsekretaris' => $request->get('tgllahirsekretaris'),
          'pendidikansekretaris' => $request->get('pendidikansekretaris'),
          'agamasekretaris' => $request->get('agamasekretaris'),
          'statussekretaris' => $request->get('agamasekretaris'),
          'jeniskelaminsekretaris' => $request->get('jeniskelaminsekretaris'),
          'emailsekretaris'=> $request->get('emailsekretaris'),
          'nohpsekretaris' => $request->get('nohpsekretaris'),
          'namabendahara' => $request->get('namabendahara'),
          'gelarbendahara' => $request->get('gelarbendahara'),
          'panggilanbendahara' => $request->get('panggilanbendahara'),
          'tempatlahirbendahara' => $request->get('tempatlahirbendahara'),
          'tgllahirbendahara' => $request->get('tgllahirbendahara'),
          'pendidikanbendahara' => $request->get('pendidikanbendahara'),
          'agamabendahara' => $request->get('agamabendahara'),
          'statusbendahara' => $request->get('statusbendahara'),
          'jeniskelaminbendahara' => $request->get('jeniskelaminbendahara'),
          'emailbendahara' => $request->get('emailbendahara'),
          'nohpbendahara' => $request->get('nohpbendahara'),
          'masabakti' => $request->get('masabakti'),
          'keputusantertinggi' => $request->get('keputusantertinggi'),
          'usaha' => $request->get('usaha'),
          'unit' => $request->get('unit'),
          'sumberkeuangan' => $request->get('sumberkeuangan'),
          'logo' => $request->get('logo'),
          'bendera' => $request->get('bendera'),
          'akte' => $request->get('akte'),
          'adart' => $request->get('adart'),
          'programkerja' => $request->get('programkerja'),
          'skpengurus' => $request->get('skpengurus'),
          'ktppengurus' => $request->get('ktppengurus'),
          'skdomisili' => $request->get('skdomisili'),
          'npwp' => $request->get('npwp'),
          'fotosekretariat' => $request->get('fotosekretariat'),
          'skpenggunaansekretariat' => $request->get('skpenggunaansekretariat'),

        );

         DB::table('organisasi')->insert($data);


        return redirect('app/registrasi/baru/pengisiandata');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatelapangan(Request $request)
    {
        $data = array(
           'tahap' => $request->get('tahap'),
           'pesan_sukses' => $request->get('pesan_sukses'),
           'pesan_gagal' => $request->get('pesan_gagal'),
           'notif' => $request->get('notif')
       );

       DB::table('organisasi')->where('noregistrasi','=', $request->get('noregistrasi'))->update($data);

       return redirect ('admin/dataormas');
      //  return response()->json(array('data'=> $data), 200);

    }


    public function updatewawancara(Request $request)
    {
      $data = array(
         'tahap' => $request->get('tahap'),
         'pesan_sukses' => $request->get('pesan_sukses'),
         'pesan_gagal' => $request->get('pesan_gagal'),
         'notif' => $request->get('notif')
     );

       DB::table('organisasi')->where('noregistrasi','=', $request->get('noregistrasi'))->update($data);

      return redirect('admin/datawawancara');
      //  return view('app/admin/datawawancara');
    }

    public function updatepengambilan(Request $request)
    {
      $data = array(
         'tahap' => $request->get('tahap'),
         'pesan_sukses' => $request->get('pesan_sukses'),
         'pesan_gagal' => $request->get('pesan_gagal'),
         'notif' => $request->get('notif')
     );

       DB::table('organisasi')->where('noregistrasi','=', $request->get('noregistrasi'))->update($data);

      return redirect('admin/datapengambilan');

    }

    public function usersendpesan(Request $request) {
      $user = Auth::user();
      $data = array(
           'toid' => 1,
           'fromid' => $user->id,
           'isi' => $request->get('isi'),
           'status' => 'sendtoadmin',
           'notif' => 'user',
       );

      DB::table('pesan')->insert($data);

      return redirect('app/pesan');
    }

    public function ubahdata(Request $request) {
      $user = Auth::user();
      $data = array(
        'iduser' => $user->id,
        'noregistrasi'=> $request->get('noregistrasi'),
        'namaorganisasi' => $request->get('namaorganisasi'),
        'bidangkegiatan' => $request->get('bidangkegiatan'),
        'ruanglingkup' => $request->get('ruanglingkup'),
        'alamatsekretarian' => $request->get('alamatsekretarian'),
        'tempatpendirian' => $request->get('tempatpendirian'),
        'waktupendirian' => $request->get('waktupendirian'),
        'asasorganisasi' => $request->get('asasorganisasi'),
        'tujuanorganisasi' => $request->get('tujuanorganisasi'),
        'namapendiri' => $request->get('namapendiri'),
        'namapenasehat' => $request->get('namapenasehat'),
        'namapembina' => $request->get('namapembina'),
        'namaketua' => $request->get('namaketua'),
        'gelarketua' => $request->get('gelarketua'),
        'panggilanketua' => $request->get('panggilanketua'),
        'tempatlahirketua' => $request->get('tempatlahirketua'),
        'tgllahirketua' => $request->get('tgllahirketua'),
        'pendidikanketua' => $request->get('pendidikanketua'),
        'agamaketua' => $request->get('agamaketua'),
        'statusketua' => $request->get('agamaketua'),
        'jeniskelaminketua' => $request->get('statusketua'),
        'emailketua' => $request->get('emailketua'),
        'nohpketua' => $request->get('nohpketua'),
        'namasekretaris' => $request->get('namasekretaris'),
        'gelarsekretaris' => $request->get('gelarsekretaris'),
        'panggilansekretaris' => $request->get('panggilansekretaris'),
        'tempatlahirsekretaris' => $request->get('tempatlahirsekretaris'),
        'tgllahirsekretaris' => $request->get('tgllahirsekretaris'),
        'pendidikansekretaris' => $request->get('pendidikansekretaris'),
        'agamasekretaris' => $request->get('agamasekretaris'),
        'statussekretaris' => $request->get('agamasekretaris'),
        'jeniskelaminsekretaris' => $request->get('jeniskelaminsekretaris'),
        'emailsekretaris'=> $request->get('emailsekretaris'),
        'nohpsekretaris' => $request->get('nohpsekretaris'),
        'namabendahara' => $request->get('namabendahara'),
        'gelarbendahara' => $request->get('gelarbendahara'),
        'panggilanbendahara' => $request->get('panggilanbendahara'),
        'tempatlahirbendahara' => $request->get('tempatlahirbendahara'),
        'tgllahirbendahara' => $request->get('tgllahirbendahara'),
        'pendidikanbendahara' => $request->get('pendidikanbendahara'),
        'agamabendahara' => $request->get('agamabendahara'),
        'statusbendahara' => $request->get('statusbendahara'),
        'jeniskelaminbendahara' => $request->get('jeniskelaminbendahara'),
        'emailbendahara' => $request->get('emailbendahara'),
        'nohpbendahara' => $request->get('nohpbendahara'),
        'masabakti' => $request->get('masabakti'),
        'keputusantertinggi' => $request->get('keputusantertinggi'),
        'usaha' => $request->get('usaha'),
        'unit' => $request->get('unit'),
        'sumberkeuangan' => $request->get('sumberkeuangan'),
        'logo' => $request->get('logo'),
        'bendera' => $request->get('bendera'),
        'akte' => $request->get('akte'),
        'adart' => $request->get('adart'),
        'programkerja' => $request->get('programkerja'),
        'skpengurus' => $request->get('skpengurus'),
        'ktppengurus' => $request->get('ktppengurus'),
        'skdomisili' => $request->get('skdomisili'),
        'npwp' => $request->get('npwp'),
        'fotosekretariat' => $request->get('fotosekretariat'),
        'skpenggunaansekretariat' => $request->get('skpenggunaansekretariat'),
        'notif' => $request->get('notif'),
      );

      DB::table('organisasi')->where('noregistrasi','=', $request->get('noregistrasi'))->update($data);

      return redirect('app/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
