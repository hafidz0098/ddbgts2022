<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rumpun(){
        return $this->belongsTo(Rumpun::class, 'rumpun_id');
    }

    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }

}
