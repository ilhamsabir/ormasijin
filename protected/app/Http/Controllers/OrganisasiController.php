<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Organisasi;
use App\Http\Requests;

class OrganisasiController extends Controller
{

    /**
     * Protected Auth
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('app/baru/registrasi');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pengisiandata()
    {
        return view('app/baru/pengisiandata');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifikasilapangan()
    {
        return view('app/baru/verifikasilapangan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function wawancara()
    {
        return view('app/baru/wawancara');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pengambilanskt()
    {
        return view('app/baru/pengambilanskt');
    }

    public function history()
    {
      $user = Auth::user();
      $data = DB::table('organisasi')
             ->select('organisasi.id as idorganisasi','organisasi.pesan_sukses as pesansuksesorganisasi', 'organisasi.pesan_gagal as pesangagalorganisasi', 'organisasi.tahap as organisasitahap', 'organisasi.created_at as organisasicreated_at',  'users.*')
             ->leftJoin('users', 'users.id', '=', 'organisasi.iduser')
             ->where('users.id', '=', $user->id)->get();

      return view('app/history')->with('data', $data);
    }

    public function ubahdata($id)
    {
      // $user = Auth::user();
      $data = DB::table('organisasi')
            //  ->select('organisasi.id as idorganisasi','organisasi.pesan_sukses as pesansuksesorganisasi', 'organisasi.pesan_gagal as pesangagalorganisasi', 'organisasi.tahap as organisasitahap', 'organisasi.created_at as organisasicreated_at',  'users.*')
             ->leftJoin('users', 'users.id', '=', 'organisasi.iduser')
             ->where('organisasi.noregistrasi', '=', $id)->get();

      return view('app/baru/ubahdata')->with('data', $data);
    }

    public function pesan()
    {
      return view('app/pesan');
    }

    public function getpesanuser()
    {
      $user = Auth::user();
      $data = DB::table('pesan')
             ->select('pesan.id as idpesan','pesan.*', 'users.*')
             ->leftJoin('users', 'users.id', '=', 'pesan.fromid')
             ->get();

      return response()->json(array('data'=> $data));
    }
}
