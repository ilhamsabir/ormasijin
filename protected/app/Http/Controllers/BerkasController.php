<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Berkas;
use App\Http\Requests;

class BerkasController extends Controller
{

    // get list logo
    public function getData()
    {
        $user = Auth::user();
        $data = DB::table('berkas')->where([
                     ['iduser', '=', $user->id],
                    //  ['typefile', '=', 'logo'],
                 ])->get();
        return response()->json(array('data'=> $data), 200);
    }

    // upload logo
    public function uploadlogo(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/logo/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'logo';
        $berkas->save();

        return response()->json(array('path'=> $filename), 200);

    }

    // upload bendera
    public function uploadbendera(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/bendera/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'bendera';
        $berkas->save();

        return response()->json(array('path'=> $filename), 200);

    }

    // upload akte
    public function uploadakte(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/akte/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'akte';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }

    // upload adart
    public function uploadadart(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/adart/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'adart';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }



    // upload adart
    public function uploadproker(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/proker/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'proker';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }

    // upload adart
    public function uploadsk(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/sk/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'sk';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }

    // upload adart
    public function uploadktp(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/ktp/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'ktp';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }

    // upload adart
    public function uploaddomisili(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/domisili/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'domisili';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }

    // upload adart
    public function uploadnpwp(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/npwp/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'npwp';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }

    public function uploadfoto(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/foto/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'foto';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }

    public function uploadbukti(Request $request)
    {
      $user = Auth::user();
      $berkas = new Berkas();
        $filename = '';
        if($request->hasFile('namafile')){
            $myfile = $request->file('namafile');
            $filename = 'ijin_'.time() . '.' . $myfile->getClientOriginalExtension();
            $destinationPath = 'upload/bukti/';
            $myfile->move($destinationPath,$filename);
        }

        $berkas->iduser = $user->id;
        $berkas->namafile = $filename;
        $berkas->typefile = 'bukti';
        $berkas->save();

        return response()->json(array('path'=> $berkas), 200);

    }


}
