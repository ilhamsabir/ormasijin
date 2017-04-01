<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Http\Requests;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // get index
    public function dashboard()
    {
      return view('app/admin/dashboard');
    }

    // get list logo
    public function dataormas()
    {
      // return response()->json(array('data'=> $data), 200);
      return view('app/admin/dataormas');
    }

    // get list logo
    public function datalapangan()
    {

      return view('app/admin/datalapangan');
    }

    // get list logo
    public function datawawancara()
    {

      return view('app/admin/datawawancara');
    }

    // get list logo
    public function datapengambilan()
    {

      return view('app/admin/datapengambilan');
    }


    // get list logo
    public function detaildataormas($id)
    {

      $data = DB::table('organisasi')
             ->leftJoin('users', 'users.id', '=', 'organisasi.iduser')
             ->where('organisasi.noregistrasi', '=', $id)->get();

      return view('app/admin/detaildataormas')->with('data', $data);
    }


    // get list logo
    public function pesan()
    {
      return view('app/admin/pesan');
    }

    public function getpesanadmin()
    {
      $user = Auth::user();
      $data = DB::table('pesan')
             ->select('pesan.id as idpesan','pesan.isi as isipesan','pesan.fromid as fromidpesan', 'pesan.toid as toidpesan', 'pesan.created_at as pesancreated_at',  'users.*')
             ->leftJoin('users', 'users.id', '=', 'pesan.fromid')
            //  ->where('pesan.fromid', '=', $user->id)
             ->get();

      return response()->json(array('data'=> $data));
    }

    public function detailpesan($id)
    {
      // $user = Auth::user();
      $data = DB::table('pesan')
              ->select('pesan.id as idpesan','pesan.isi as isipesan','pesan.fromid as fromidpesan', 'pesan.toid as toidpesan', 'pesan.created_at as pesancreated_at',  'users.*')
              ->leftJoin('users', 'users.id', '=', 'pesan.fromid')
              ->where('pesan.id', '=', $id)
               ->get();

      return view('app/admin/detailpesan')->with('data', $data);
    }

    public function adminsendpesan(Request $request) {
      $user = Auth::user();
      $data = array(
           'toid' => $request->get('toid'),
           'fromid' => $user->id,
           'isi' => $request->get('isi'),
           'status' => 'sendtouser',
           'notif' => 'user',
       );

      DB::table('pesan')->insert($data);

      return redirect('admin/pesan');
    }


}
