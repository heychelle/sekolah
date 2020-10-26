<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kelas',
        'jurusan_kelas',
        'wali_kelas',
    ];

    public function murids(){
        return $this->hasMany(Murid::class);
    }
}
