<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $fillable = ['kode','nama','bobot','atribut'];

    public function alternatif(){
        return $this->hasMany(Alternatif::class, 'kriteria_id', 'id');
    }
}
