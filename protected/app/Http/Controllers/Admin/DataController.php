<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Organisasi;
use App\Http\Requests;

class DataController extends Controller
{

    // get list logo
    public function getdata()
    {

        $data = DB::table('organisasi')->orderBy('created_at', 'asc')->get();
        return response()->json(array('data'=> $data), 200);
    }

}
