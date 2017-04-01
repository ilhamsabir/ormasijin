<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Organisasi;
use App\Http\Requests;

class TahapController extends Controller
{
    //
    public function alldata()
    {
      $user = Auth::user();
      $data = DB::table('organisasi')
                  ->leftJoin('users', 'users.id', '=', 'organisasi.iduser')
                  // ->where('iduser','=',$user->id)
                  ->get();
      return response()->json(array('data'=> $data), 200);

    }

    public function databesideuser()
    {
      $user = Auth::user();
      $data = DB::table('organisasi')
                  ->where('iduser','=',$user->id)
                  ->get();
      return response()->json(array('data'=> $data), 200);

    }

    public function verfiyuser()
    {
      $user = Auth::user();
      $data = DB::table('organisasi')
                  ->leftJoin('users', 'users.id', '=', 'organisasi.iduser')
                  ->where('iduser','=',$user->id)
                  ->get();
      return response()->json(array('data'=> $data), 200);

    }


}
