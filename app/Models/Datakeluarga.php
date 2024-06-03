<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakeluarga extends Model
{
    use HasFactory;
    protected $table ='datakeluarga';

    public function jemaat(){
        return $this->belongsTo((Datajemaat::class));
    }
}
