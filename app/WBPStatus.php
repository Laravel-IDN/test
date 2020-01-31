<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WBPStatus extends Model
{
    protected $table = 'wbp_status';
    protected $casts = [
        'start_at' => 'datetime:Y-m-d',
        'end_at' => 'datetime:Y-m-d',
    ];

    public function wbp(){
        return $this->belongsTo(WBP::class,'wbp_id');
    }
}
