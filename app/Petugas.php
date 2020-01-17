<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = ['nama', 'NIK', 'NIP', 'alamat', 'email', 'no_telp', 'pangkat', 'golongan'];
}
