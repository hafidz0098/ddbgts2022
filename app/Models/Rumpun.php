<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumpun extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peserta(){
        return $this->hasMany(Peserta::class);
    }
}
