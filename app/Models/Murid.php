<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama_murid',
        'kelas_id',
        'gender',
        'tanggal_lahir',
        'alamat',
        'nomor_telp',
    ];
    public function kelas(){
       return $this->belongsTo(Kelas::class);
    }
}
