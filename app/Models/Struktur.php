<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;

    protected $table = 'struktur' ;

    protected $fillable = [
        'atasan_id','pegawai_id'
    ];

    public function atasan()
    {
        return $this->belongsTo(User::class, 'atasan_id');
    }
    public function pegawai()
    {
        return $this->belongsTo(User::class, 'pegawai_id');
    }

}
