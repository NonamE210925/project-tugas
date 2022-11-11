<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';

    protected $fillable = [
        'atasan_id', 'pegawai_id','judul','isi','file','status','tpt','tpt','tst'
    ];

    public function ats()
    {
        return $this->belongsTo(Atasan::class, 'atasan_id');
    }

    public function peg()
    {
        return $this->belongsTo(Pegawai::class,'pegawai_id');
    }


}
