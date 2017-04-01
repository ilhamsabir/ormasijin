<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
  protected $table = 'berkas';
  protected $fillable = [
        'iduser', 'namafile', 'typefile'
    ];

}
