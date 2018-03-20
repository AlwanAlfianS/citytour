<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
  protected $table = 't_siswa';
  public $primaryKey = 'id_siswa';

  protected $fillable = ['nis', 'nama', 'jk', 'alamat', 'notelp', 'agama','id_kelas'];

  public $timestamps = false;
}
