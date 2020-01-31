<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WBP extends Model
{
    protected $table = 'wbp';
    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'perkara', 'status', 'jenis_kejahatan', 'vonis', 'foto','tgl_berperkara'];
}
