<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Http\Requests;

class NotifController extends Controller
{
    //
    public function notifUser()
    {
      $user = Auth::user();
      $data = DB::table('organisasi')
            ->leftJoin('users', 'users.id', '=', 'organisasi.iduser')
            ->where('users.id', '=', $user->id)
            ->get();
      return response()->json($data);
    }

    public function readnotifuser(Request $request)
    {
      $id = $request->get('id');
      $data = array(
           'id' =>  $request->get('id'),
           'status' =>  $request->get('status')
       );

       DB::table('pesan')->where('id','=', $id)->update($data);

      return redirect('app/pesan');
      // return response()->json($data, $id);

    }

    public function readnotifverifikasi(Request $request)
    {
      $reg = $request->get('noregistrasi');
      $data = array(
           'id' =>  $request->get('id'),
           'status' =>  $request->get('status')
       );

       DB::table('organisasi')->where('noregistrasi','=', $reg)->update($data);

      // return redirect('app/pesan');
      return response()->json($data, $reg);

    }
}
