<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Libraries\Ijin;

class FrontPageController extends Controller
{
    // Index Home Page
    public function index()
    {
        return view('welcome');
    }

    // Alur Home Page
    public function alur()
    {
      return view('alur');
    }

    // Persyaratan Home Page
    public function persyaratan()
    {
      return view('persyaratan');
    }

    // Persyaratan Home Page
    public function callcenter()
    {
      return view('callcenter');
    }

}
